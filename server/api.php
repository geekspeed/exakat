<?php

const PIPEFILE = '/tmp/api';

$initTime = microtime(true);

if (!isset($_REQUEST['json'])) {
    serverLog("unknown command : empty");
    die( 'Exakat server (missing command)');
}

if (empty($_REQUEST['json'])) {
    serverLog("unknown command : empty");
    die( 'Exakat server (empty command)');
}

if ($_REQUEST['json'][0] !== '[') { 
    $_REQUEST['json'] = safeDecrypt($_REQUEST['json']); 
}

if (empty($_REQUEST['json'])) {
    serverLog("unknown command : empty");
    die( 'Exakat server (empty command)');
}

$commands = json_decode($_REQUEST['json']);
if (empty($commands)) {
    serverLog("unknown command : empty");
    die( 'Exakat server (unknown commands)');
}
$command = array_shift($commands);

$orders = array('stop', 

                'ping',

                'init', 
                'config', 
                'project', 
                'fetch', 

                'remove', 
                'report', 
                'doctor', 

                'status', 
                'stats', 
                'dashboard',
                );

if (!in_array($command, $orders)) {
    serverLog("unknown command : $command");
    die( 'Exakat server (unknown command)');
}

$command($commands);

$endTime = microtime(true);
serverLog(substr($command."\t".floor(1000*($endTime - $initTime))."\t".implode("\t", $commands), 0, 256));
//End script

/// Function definitions

function stop($args) {
    serverLog("Shutting down\n");
    $pid = getmypid();
    echo "<p>Shutting down server (pid : $pid)</p>";
    ob_flush();

    if (file_exists(__FILE__)) {
        unlink(__FILE__);
    }

    exec('kill '.getmypid());
    // This is killed.
}

function init($args) {
    if (($id = array_search('-R', $args)) === false) {
        error('Missing VCS/code', '');
    }
    
    $url = parse_url($args[$id + 1]);
    if (!isset($url['scheme'], $url['host'], $url['path'])) {
        error('Malformed VCS', '');
    }
    
    $vcs = unparse_url($url);

    if (($id = array_search('-p', $args)) === false) {
        $project = autoprojectname();
    } elseif (!($project = $args[$id + 1])) {
        $project = autoprojectname();
    } elseif (file_exists("projects/$project")) {
        error('Project already exists', '');
    }
    
    $extra = '';
    if (($id = array_search('-branch', $args)) !== false) {
        $extra .= ' -branch '.escapeshellarg($args[$id + 1]).' ';
    }

    if (($id = array_search('-tag', $args)) !== false) {
        $extra .= ' -tag '.escapeshellarg($args[$id + 1]).' ';
    }

    shell_exec('__PHP__ __EXAKAT__ queue init -p '.escapeshellarg($project).' -R '.escapeshellarg($vcs).$extra);
    serverLog("init : $project $vcs ".date('r'));

    echo json_encode(array('project' => $project, 
                           'start' => date('r')));
}

function ping($args) {
    echo 'pong';
}

function project($args) {
    if (($id = array_search('-p', $args)) === false) {
        error("missing Project", '');
    }

    $project = $args[$id + 1];

    shell_exec("__PHP__ __EXAKAT__ queue project -p ".escapeshellarg($project));
    serverLog("project : $project ".date('r'));

    echo json_encode(array('project' => $project, 
                           'start' => date('r')));
}

function remove($args) {
    if (($id = array_search('-p', $args)) === false) {
        error("missing Project", '');
    }

    $project = $args[$id + 1];

    shell_exec("__PHP__ __EXAKAT__ queue remove -p ".escapeshellarg($project));
    serverLog("remove : $project ".date('r'));

    echo json_encode(array('project' => $project, 
                           'start' => date('r')));
}

function report($args) {
    if (($id = array_search('-p', $args)) === false) {
        error("missing Project", '');
    }

    $project = $args[$id + 1];

    $id = array_search('-format', $args);
    $format = $args[$id + 1];

    shell_exec("__PHP__ __EXAKAT__ queue report -p ".escapeshellarg($project)." -format ".escapeshellarg($format));
    serverLog("remove : $project ".date('r'));

    echo json_encode(array('project' => $project, 
                           'start' => date('r')));
}

function doctor($args) {
    if (($id = array_search('-p', $args)) === false) {
        shell_exec('__PHP__ __EXAKAT__ queue doctor');
        serverLog('doctor');

        error('No project configured', '');

        echo json_encode(array('doctor' => 'no project', 
                               'start'  => date('r')));
    } else {
        $project = $args[$id + 1];

        if (!file_exists("projects/$project")) {
            error('No project available', '');
        }

        shell_exec("__PHP__ __EXAKAT__ queue doctor -p ".escapeshellarg($project));
        serverLog("doctor : $project ".date('r'));

        echo json_encode(array('doctor' => $project, 
                               'start'  => date('r'),
                               ));
    }
}

function status($args) {
    if (($id = array_search('-p', $args)) === false) {
        error("missing Project", '');
    }

    $project = $args[$id + 1];

    if (!file_exists("projects/$project")) {
        error('No project available', '');
    }

    echo shell_exec("__PHP__ __EXAKAT__ status -p ".escapeshellarg($project)." -json");
}

function fetch($args) {
    if (($id = array_search('-p', $args)) === false) {
        error("missing Project", '');
    }

    $project = $args[$id + 1];

    if (!file_exists("projects/$project")) {
        error('No project available', '');
    }

    $id = array_search('-format', $args);

    $json = @file_get_contents('projects/.exakat/Project.json');
    $json = json_decode($json);
    if (isset($json->project) && $project === $json->project) {
        // Too early
        error('No dump.sqlite available', '');
    }

    if (!file_exists("projects/$project/dump.sqlite")) {
        error('No dump.sqlite available', '');
    }

    // check if the report is done. If not, no dump yet.
    if (!file_exists("projects/$project/diplomat")) {
        error('No dump.sqlite available', '');
    }

    shell_exec("cd projects/$project/; zip -r dump.zip dump.sqlite; ");
    serverLog("fetch : $project ".date('r'));
    $fp = fopen("projects/$project/dump.zip", 'r');
    fpassthru($fp);
    unlink("projects/$project/dump.zip");
}

function config($args) {
    if (($id = array_search('-p', $args)) === false) {
        error("missing Project", '');
    }

    $project = $args[$id + 1];

    $directives = array_keys($args, '-c');
    
    if (empty($directives)) {
        error('no directives provided', '');
    }

    $relay = '';
    foreach($directives as $c) {
        $relay .= ' -c '.escapeshellarg($args[$c + 1]);
    }

    echo shell_exec("__PHP__ __EXAKAT__ queue config -p ".escapeshellarg($project)." $relay -json");
}

function stats($args) {
    print "Stats";
}

function dashboard($args) {
    $files = glob(__DIR__.'/*');
    finish(array('projects' => $files,
          ));
}

function autoProjectName() {
    $letters = range('a', 'z');
    try {
        $return = $letters[random_int(0, 25)].random_int(0, 1000000000);
    } catch(Throwable $e) {
        $return = 'a';
    }
    
    return $return;
}

function checksUUID($value) {
    if (strlen($value) != 10) {
        return false;
    }
    if (preg_match('/[^a-z0-9]/', $value)) {
        return false;
    }
    
    return $value;
}

function finish($message) {
    echo json_encode($message);
    die();
}

function error($message, $project) {
    finish(array('error'   => $message,
                 'project' => $project,
                )
          );
}

function serverLog($message) {
    $fp = fopen(__DIR__.'/api.log', 'a');
    if ($fp !== false) {
        fwrite($fp, date('r')."\t$message\n");
        fclose($fp);
    }
}

function unparse_url($parsed_url) {
    $scheme   = isset($parsed_url['scheme'])   ? $parsed_url['scheme'].'://'   : '';
    $host     = isset($parsed_url['host'])     ? $parsed_url['host']           : '';
    $port     = isset($parsed_url['port'])     ? ':'.$parsed_url['port']       : '';

    $user     = empty($parsed_url['user'])     ? '' : $parsed_url['user'];
    $pass     = empty($parsed_url['pass'])     ? '' : ':'.$parsed_url['pass'];
    $userpass = ($user || $pass)               ? "$user$pass@"                 : '';

    $path     = isset($parsed_url['path'])     ? $parsed_url['path']           : '';
    $query    = isset($parsed_url['query'])    ? '?'.$parsed_url['query']      : '';
    $fragment = isset($parsed_url['fragment']) ? '#'.$parsed_url['fragment']   : '';

    return "$scheme$userpass$host$port$path$query$fragment";
}

/**
* Decrypt a message
*
* @param string $encrypted - message encrypted with safeEncrypt()
* @param string $key - encryption key
* @return string
*/
function safeDecrypt($encrypted, $key = '__SECRET_KEY__') {
    $decoded = base64_decode($encrypted);
    if ($decoded === false) {
        return '';
    }
    if (mb_strlen($decoded, '8bit') < (SODIUM_CRYPTO_SECRETBOX_NONCEBYTES + SODIUM_CRYPTO_SECRETBOX_MACBYTES)) {
        return '';
    }
    $nonce = mb_substr($decoded, 0, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, '8bit');
    $ciphertext = mb_substr($decoded, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, null, '8bit');

    $plain = sodium_crypto_secretbox_open(
        $ciphertext,
        $nonce,
        $key
    );
    if ($plain === false) {
         return '';
    }
    sodium_memzero($ciphertext);
    sodium_memzero($key);
    return $plain;
}

?>
