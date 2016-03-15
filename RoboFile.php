<?php

use Symfony\Component\Finder\Finder;

include './library/Autoload.php';
spl_autoload_register('Autoload::autoload_library');

class RoboFile extends \Robo\Tasks
{
    public function release()
    {
        $this->yell('Releasing Exakat');
    }

    public function versionBump($version = null) {
        if (!$version) {
            $versionParts = explode('.', \Exakat::VERSION);
            ++$versionParts[count($versionParts)-1];
            $version = implode('.', $versionParts);
        }
        $this->taskReplaceInFile(__DIR__.'/library/Exakat.php')
            ->from("VERSION = '".\Exakat::VERSION."'")
            ->to("VERSION = '".$version."'")
            ->run();
    }

    public function updateBuild() {
        $build = \Exakat::BUILD + 1;

        $this->taskReplaceInFile(__DIR__.'/library/Exakat.php')
            ->from("BUILD = ".\Exakat::BUILD)
            ->to("BUILD = ".$build)
            ->run();
    }

    /**
     * check that licence is in the PHP source files
     */
    public function checkLicence()
    {
        $files = Finder::create()->files()
                                 ->name('*.php')
                                 ->in('library')
                                 ->in('scripts');
        
        $licence2015 = <<<'LICENCE'
/*
 * Copyright 2012-2015 Damien Seguy – Exakat Ltd <contact(at)exakat.io>
 * This file is part of Exakat.
 *
 * Exakat is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Exakat is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Exakat.  If not, see <http://www.gnu.org/licenses/>.
 *
 * The latest code can be found at <http://exakat.io/>.
 *
*/


LICENCE;
        $licenceCRC2015 = crc32(trim($licence2015));

        $licence = <<<'LICENCE'
/*
 * Copyright 2012-2016 Damien Seguy – Exakat Ltd <contact(at)exakat.io>
 * This file is part of Exakat.
 *
 * Exakat is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Exakat is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Exakat.  If not, see <http://www.gnu.org/licenses/>.
 *
 * The latest code can be found at <http://exakat.io/>.
 *
*/
LICENCE;
        $licenceCRC = crc32(trim($licence));

        foreach ($files as $file) {
            if (strpos($file, 'Progressbar') !== false) { 
                print "Avoiding Progressbar.php\n"; 
                continue; 
            }
            
            $tokens = token_get_all(file_get_contents($file));
            
            $tokenId = 0;
            if ($tokens[$tokenId][0] == T_INLINE_HTML && trim($tokens[$tokenId][1]) == '#!/usr/bin/env php') {
                ++$tokenId;
            }
            if ($tokens[$tokenId][0] == T_OPEN_TAG) {
                if ($tokens[$tokenId + 1][0] != T_COMMENT) {
                    array_splice($tokens, $tokenId + 1, 0, array(array(0 => T_COMMENT, 1 => $licence, 2 => 2)));
                    $fp = fopen($file, 'w+');
                    foreach($tokens as $token) {
                        if (is_array($token)) {
                            fwrite($fp, $token[1]);
                        } else {
                            fwrite($fp, $token);
                        }
                    }
                    fclose($fp);
                } elseif (crc32($tokens[$tokenId + 1][1]) === $licenceCRC2015) {
                    echo "Updating licence date in file '", $file, "'\n";
                    $tokens[$tokenId + 1][1] = $licence;

                    $fp = fopen($file, 'w+');
                    foreach($tokens as $token) {
                        if (is_array($token)) {
                            fwrite($fp, $token[1]);
                        } else {
                            fwrite($fp, $token);
                        }
                    }
                    fclose($fp);
                } elseif (crc32($tokens[$tokenId + 1][1]) !== $licenceCRC) {
                    echo "Licence seems to be changed in file '", $file, "'\n";
                }
            } else {
                echo "Couldn't apply licence on '", $file, "'\n", 
                      print_r($tokens[$tokenId], true);
            }
        }
    }
    
    /**
     * Bundle everthing for the release
     */
    public function buildRelease()
    {    
        $this->taskExecStack()
         ->stopOnFail()
         ->exec('mkdir release')
         ->exec('mkdir release/config')
         ->exec('mkdir release/bin')
         ->exec('cp -r bin/analyze release/bin/')
         ->exec('cp -r bin/build_root release/bin/')
         ->exec('cp -r bin/export_analyzer release/bin/')
         ->exec('cp -r bin/extract_errors release/bin/')
         ->exec('cp -r bin/files release/bin/')
         ->exec('cp -r bin/load release/bin/')
         ->exec('cp -r bin/log2csv release/bin/')
         ->exec('cp -r bin/magicnumber release/bin/')
         ->exec('cp -r bin/project release/bin/')
         ->exec('cp -r bin/project_init release/bin/')
         ->exec('cp -r bin/report release/bin/')
         ->exec('cp -r bin/report_all release/bin/')
         ->exec('cp -r bin/stat release/bin/')
         ->exec('cp -r bin/tokenizer release/bin/')
         ->exec('cp -r data release/')
         ->exec('cp config/config-default.ini release/config/config-default.ini')
         ->exec('cp -r human release/')
         ->exec('cp -r library release/')
         ->exec('mkdir release/log')
         ->exec('mkdir release/media')
         ->exec('mkdir release/project')
         ->exec('cp -r projects/test release/projects/')
         ->exec('cp -r projects/default release/projects/')
         ->exec('mkdir release/scripts')
         ->exec('cp -r scripts/*.sh release/scripts/')
         ->exec('cp -r scripts/doctor.php release/scripts/')
         ->exec('cp -r tests release/')
         ->exec('cp -r composer.* release/')
         ->exec('cp -r RoboFile.php release/')
         ->exec('tar czf release.tgz release')
         ->exec('mv release.tgz release.'.\Exakat::VERSION.'.tgz')
         ->run();
    }

    /**
     * Clean the build process
     */
    public function clean() {
        $this->taskExecStack()
         ->stopOnFail()
         ->exec('rm -rf release')
         ->exec('rm -rf release.'.\Exakat::VERSION.'.tgz')
         ->run();
    }
    
    public function pharBuild() {
        $packer = $this->taskPackPhar('exakat.phar')
//                       ->compress()
// compress yield a 'too many files open' error
                       ;
        
        $this->updateBuild();

        $this->taskComposerInstall()
            ->noDev()
            ->printed(false)
            ->run();

        $this->taskComposerInstall()
             ->printed(false)
             ->run();

        $folders = array('data', 'human', 'library', 'media/devoops', 'media/faceted', 'server');
        foreach($folders as $folder) {
            $files = Finder::create()->ignoreVCS(true)
                                     ->files()
                                     ->in(__DIR__.'/'.$folder);
            foreach($files as $file) {
                $packer->addFile($folder.'/'.$file->getRelativePathname(), $file->getRealPath());
            }
        }

        $packer->addFile('exakat','exakat')
               ->executable('exakat')
               ->run();

        $this->taskExecStack()
             ->stopOnFail()
             ->exec('mv exakat.phar ../release/')
             ->exec('cp docs/*.rst ../release/docs/')
             ->exec('cp -r docs/images ../release/docs/')
             ->exec('cd ../release/; tar -zcvf exakat-'.\Exakat::VERSION.'.tar.gz exakat.phar docs/*')
             ->run();
    }
    
    public function checkAll() {
        echo "Check licence\n";
        $this->checkLicence();

        echo "Check format\n";
        $this->checkFormat();

        echo "Check analyzers database\n";
        $this->checkAnalyzers();

        echo "Check external file's syntax\n";
        $this->checkSyntax();

        echo "Check PHP' scripts syntax\n";
        $this->checkPhplint();

        echo "Check composer data\n";
        $this->checkComposerData();

        echo "Check Reports' format\n";
        $this->checkReportFormat();

        echo "Check Data/*.ini consistency\n";
        $this->checkData();
        

        echo "Check Classname' case\n";
        $this->checkClassnames();

        echo "Check Compatibility themes\n";
        $this->checkCompatibilityThemes();

        echo "Check Docs\n";
        $this->checkDoc();
    }
    
    public function checkFormat() {
        shell_exec('php ~/.composer/vendor/bin/php-cs-fixer fix');
    }

    public function checkAnalyzers() {
        $sqlite = new sqlite3('data/analyzers.sqlite');
        
        // analyzers in Unassigned 
        $res = $sqlite->query('SELECT analyzers.folder || "/" || analyzers.name as name FROM categories 
JOIN analyzers_categories 
    ON categories.id = analyzers_categories.id_categories
JOIN analyzers 
    ON analyzers_categories.id_analyzer = analyzers.id
        WHERE categories.name="Unassigned"');
        
        $total = 0;
        while($row = $res->fetchArray()) {
            ++$total;
            echo ' + ', $row['name'], "\n";
        }
        echo $total, "analyzers in Unassigned\n";

        // categories with orphans
        $res = $sqlite->query('SELECT analyzers_categories.id_analyzer, analyzers_categories.id_categories FROM categories 
JOIN analyzers_categories 
    ON categories.id = analyzers_categories.id_categories
JOIN analyzers 
    ON analyzers_categories.id_analyzer = analyzers.id
        WHERE analyzers.id IS NULL');
        
        $total = 0;
        while($row = $res->fetchArray()) {
            ++$total;
            print_r($row);
//            $res = $sqlite->query('DELETE FROM analyzers_categories WHERE id_analyzer='.$row['id_analyzer'].' AND id_categories = '.$row['id_categories']);
        }
        echo $total, " categories have orphans\n";

        // analyzers in no categories
        $res = $sqlite->query('SELECT analyzers_categories.id_analyzer, analyzers_categories.id_categories FROM analyzers 
JOIN analyzers_categories 
    ON analyzers.id = analyzers_categories.id_analyzer
JOIN categories 
    ON analyzers_categories.id_categories = categories.id
        WHERE categories.id IS NULL');
        
        $total = 0;
        while($row = $res->fetchArray()) {
            ++$total;
            print_r($row);
//            $res = $sqlite->query('DELETE FROM analyzers_categories WHERE id_analyzer='.$row['id_analyzer'].' AND id_categories = '.$row['id_categories']);
        }
        echo $total, " analyzers are orphans\n";

        // check for analyzers in Files
        $total = 0;
        $res = $sqlite->query('SELECT analyzers.folder || "/" || analyzers.name as name FROM analyzers');
        while($row = $res->fetchArray()) {
            ++$total;
            if (!file_exists('library/Analyzer/'.$row['name'].'.php')) {
                echo $row['name'], " has no exakat code\n";
            }
            if (!file_exists('human/en/'.$row['name'].'.ini')) {
                echo $row['name'], " has no documentation\n";
            } else {
                $ini = parse_ini_file('human/en/'.$row['name'].'.ini');

                if (!isset($ini['name'])) {
                    echo 'human/en/'.$row['name'].'.ini', " is not set\n";
                } else {
                    $title = str_replace(array('PHP', 'autoload', 'const'), '', $ini['name']);  
                    $title = preg_replace('#__\S+#', '', $title);
                    $title = preg_replace('#\S+::#', '', $title);
                    $title = preg_replace('#\*_\S+#', '', $title);
                    $title = preg_replace('#\S+\(\)#', '', $title);

                    if ($title !== ucwords(strtolower($title)) && 
                        !preg_match('$^ext/$', $ini['name'])) { 
                        echo 'human/en/'.$row['name'].'.ini', " name is not Capital Worded ($ini[name])\n";
                    }
                } 
                // else all is fine
            }
            
            if (!file_exists('tests/analyzer/Test/'.$row['name'].'.php')) {
                echo $row['name'], " has no Test\n";
            }
        }
        echo "\n", $total, " analyzers are in the base\n";

        $analyzes = array('Analyze', 
                          'Dead Code',
                          'Security',
                          'CompatibilityPHP53',
                          'CompatibilityPHP54',
                          'CompatibilityPHP55',
                          'CompatibilityPHP56',
                          'CompatibilityPHP70',
                          'CompatibilityPHP71'
                          );
        $analyzeList = '("'.implode('", "', $analyzes).'")';

        $res = $sqlite->query('SELECT DISTINCT analyzers.folder || "/" || analyzers.name as name FROM analyzers 
JOIN analyzers_categories 
    ON analyzers.id = analyzers_categories.id_analyzer
JOIN categories 
    ON analyzers_categories.id_categories = categories.id
        WHERE categories.name IN '.$analyzeList.' AND 
              (analyzers.severity IS NULL OR 
              analyzers.timetofix IS NULL)
    ORDER BY name');
        
        $total = 0;
        while($row = $res->fetchArray()) {
            ++$total;
            print " + ".$row['name']."\n";
        }
        echo $total, " analyzers have no Severity or TimeToFix\n";

        // Checking that severity and timetofix are only using the right values
        $analyzes = array('Analyze', 
                          'Dead Code',
                          'Security',
                          'CompatibilityPHP53',
                          'CompatibilityPHP54',
                          'CompatibilityPHP55',
                          'CompatibilityPHP56',
                          'CompatibilityPHP70',
                          'CompatibilityPHP71'
                          );
        $analyzeList = '("'.implode('", "', $analyzes).'")';
        
        include 'library/Analyzer/Analyzer.php';
        $oClass = new ReflectionClass('\Analyzer\Analyzer');
        $analyzerConstants = array_keys($oClass->getConstants());

       $severityList = "'". join("', '", array_filter($analyzerConstants, function ($x) { return substr($x, 0, 2) === 'S_';})) . "'";
       $timeToFixList = "'". join("', '", array_filter($analyzerConstants, function ($x) { return substr($x, 0, 2) === 'T_';})) . "'";

        $res = $sqlite->query('SELECT DISTINCT analyzers.folder || "/" || analyzers.name as name, severity || " " || timetofix AS s FROM analyzers 
JOIN analyzers_categories 
    ON analyzers.id = analyzers_categories.id_analyzer
JOIN categories 
    ON analyzers_categories.id_categories = categories.id
        WHERE categories.name IN '.$analyzeList.' AND 
              (analyzers.severity NOT IN ('.$severityList.') OR 
              analyzers.timetofix NOT IN ('.$timeToFixList.'))
    ORDER BY name');
        
        $total = 0;
        while($row = $res->fetchArray()) {
            ++$total;
            print " + ".$row['name'].' '.$row['s']."\n";
        }
        echo $total, " analyzers have unknown Severity or TimeToFix\n";

        
        // cleaning
        $sqlite->query('VACUUM');
        echo "Vaccumed\n\n";
    }

    public function checkSyntax() {
        // checking json files
        $files = Finder::create()->ignoreVCS(true)
            ->in('data/')
            ->files()
            ->name('*.json');
        
        $errors = array();
        $total = 0;
        
        foreach($files as $file) {
            ++$total;
            $raw = file_get_contents($file);
            $json = json_decode($raw);
            if (json_last_error_msg() !== 'No error') {
                $errors[] = "$file is JSON invalid (".json_last_error_msg().")\n";
            }
        }


        // checking inifile files
        $files = Finder::create()->ignoreVCS(true)
                                 ->in('data/')
                                 ->files()
                                 ->name('*.ini');
        $docs = Finder::create()->ignoreVCS(true)
                                 ->in('human/')
                                 ->files()
                                 ->name('*.ini');
        
        set_error_handler('error_handler');
        
        foreach($files as $file) {
            ++$total;
            $ini = parse_ini_file($file);
            if (empty($ini)) {
                $errors[] = "$file is INI invalid\n";
            }
        }

        foreach($docs as $file) {
            ++$total;
            $ini = parse_ini_file($file);
            if (empty($ini)) {
                $errors[] = "$file is INI invalid\n";
                continue 1;
            }
            
            if (empty($ini['name'])) {
                $errors[] = "$file has an empty name\n";
                continue 1;
            }

            if (empty($ini['description'])) {
                $errors[] = "$file has an empty description\n";
                continue 1;
            }
        }
        set_error_handler(NULL);
        
        // checking sqlite files
        $files = Finder::create()->ignoreVCS(true)
                                 ->in('data/')
                                 ->files()
                                 ->name('*.sqlite');
        
        foreach($files as $file) {
            ++$total;
            echo $file, "\n";
            $sqlite = new \Sqlite3($file);
            $results = $sqlite->query('pragma integrity_check');
            $response = $results->fetchArray()['integrity_check'];
            if ($response != 'ok') {
                $errors[] = "$file is SQLITE3 invalid (integrity check : $response)\n";
                continue;
            }

            $results = $sqlite->query('PRAGMA foreign_key_check');
            $response = $results->fetchArray();
            if (isset($response['foreign_key_check']) && empty($response['foreign_key_check'])) {
                $errors[] = "$file is SQLITE3 invalid (foreign key check : $response[foreign_key_check])\n";
                continue;
            }
        }

        // results
        if (empty($errors)) {
            echo 'No error found in ', $total, " files tested.\n";
        } else {
            echo count($errors), ' errors found', "\n", print_r($errors, true);
        }
    }

    public function checkPhplint() {
        // checking php files
        $files = Finder::create()->ignoreVCS(true)
            ->in('library/')
            ->files()
            ->name('*.php');
            
        $errors56 = [];
        $errors70 = [];
        $total = count($files);
        foreach($files as $file) {
            $res = shell_exec('php56 -l '.$file);
            
            if (substr($res, 0, 29) != 'No syntax errors detected in ') {
                $errors56[(string) $file] = $res;
            }

            $res = shell_exec('php -l '.$file);
            
            if (substr($res, 0, 29) != 'No syntax errors detected in ') {
                $errors70[(string) $file] = $res;
            }
        }
        
        if (empty($errors56)) {
            echo 'All ', $total, " compilations OK for PHP 5.6\n";
        } else {
            echo count($errors56), " errors out of $total compilations for PHP 5.6\n",
                  print_r($errors56, true), "\n";
        }

        if (empty($errors70)) {
            echo 'All ', $total, " compilations OK for PHP 7.0\n";
        } else {
            echo count($errors70), ' errors out of ', $total, " compilations for PHP 7.0\n", 
                 print_r($errors70, true), "\n";
        }
    }

    public function checkCompatibilityThemes() {
        $sqlite = new Sqlite3('./data/analyzers.sqlite');
        
        $themes = array('53', '54', '55', '56', '70', '71');
        $first = $themes[0];
        $last = $themes[count($themes) - 1];
        
        $errors = 0;
        
        foreach($themes as $theme) {
            $res = $sqlite->query(<<<SQL
SELECT * FROM categories 
    JOIN analyzers_categories AS ac
        ON ac.id_categories = categories.id
    JOIN analyzers 
        ON ac.id_analyzer = analyzers.id
WHERE categories.name = "CompatibilityPHP$theme"
SQL
);
//            print "Version $theme\n";
            if (!$res) { 
                continue;
            }

            while($row = $res->fetchArray()) {
                $analyze = $row[5].'/'.$row[6];
                
                if (!isset($compats[$analyze])) {
                    $compats[$analyze] = array($theme => 'x');
                } else {
                    $compats[$analyze][$theme] = 'x';
                }
            }
        }

        foreach($compats as $name => $versions) {
            if (!isset($versions[$first]) && !isset($versions[$last])) {
                print "Must check $name (Not with first or last)\n";
            }
        }

        /*
        foreach($compats as $name => $versions) {
            print substr($name. str_repeat(' ', 40), 0, 40);
            
            foreach(['71', '70', '56', '55', '54', '53', '52'] as $version) {
                if (isset($versions[$version]) && $versions[$version] === 'x') {
                    print "  x  ";
                } else {
                    print "     ";
                }
            }
            print "\n";
        }
        */

        print "\n";
        print $errors." errors\n\n";
    }
    
    public function checkComposerData() {
        // check for sqlite's composer : no special chars
        $sqlite = new Sqlite3('./data/composer.sqlite');
        
        $tables = array('classes'    => 'classname', 
                        'interfaces' => 'interfacename', 
                        'traits'     => 'traitname',
                        'namespaces' => 'namespace' // namespace last for integrity
                        );
        foreach($tables as $table => $col) {
            $res = $sqlite->query('SELECT id, '.$col.' FROM '.$table);
            $toDelete = array();
            while($row = $res->fetchArray()) {
            
                // Checking that structures have the right characters
                if (preg_match('/[^a-z0-9_\\\\]/i', $row[$col])) {
                    display( $row['id'].') '.$row[$col].' is wrong in table '.$table."\n");
                    $toDelete[$row['id']] = $row[$col];
                }
            }

            if (!empty($toDelete)) {
//                echo "To be deleted " , implode(', ', $toDelete), "\n";
                $sqlite->query('DELETE FROM '.$table.' WHERE id IN ('.implode(', ', array_keys($toDelete)).')');
                echo count($toDelete), ' rows removed in ', $table, ' : "', join('", "', array_values($toDelete)), "\"\n";
            }
        }

        $downLink = array('trait'     => 'namespace',
                          'interface' => 'namespace',
                          'classe'    => 'namespace',
                          'namespace' => 'version',
                          'version'   => 'component');
        
        foreach($downLink as $child => $parent) {
            $res = $sqlite->query('SELECT '.$child.'s.id FROM '.$child.'s LEFT JOIN '.$parent.'s ON '.$child.'s.'.$parent.'_id = '.$parent.'s.id WHERE '.$parent.'s.id IS NULL');
            $missing = 0;
            while($row = $res->fetchArray()) {
                ++$missing;
            }

            $res = $sqlite->query('SELECT * FROM '.$child.'s');
            $total = 0;
            while($row = $res->fetchArray()) {
                ++$total;
            }

            echo 'Found ', $missing / $total, $child, 's without parent ', $parent. "s\n";
        }
        echo "\n";

        foreach(array_flip($downLink) as $parent => $child) {
            $res = $sqlite->query('SELECT count(*) FROM '.$parent.'s LEFT JOIN '.$child.'s ON '.$child.'s.'.$parent.'_id = '.$parent.'s.id GROUP BY '.$parent.'s.id HAVING COUNT(*) = 0');
            $children = 0;
            while($row = $res->fetchArray()) {
                ++$children;
            }

            if ($children == 0) {
                echo 'Found ', $children, ' ', $parent, ' without ', $child, "\n";
                // what to do?
            }
        }
        // What are empty Namespaces ? namespace == ''

        $sqlite->query('VACUUM');

        // Display stats
        echo "\n";
        $res = $sqlite->query('SELECT count(*) AS nb FROM components');
        echo $res->fetchArray(SQLITE3_ASSOC)['nb'], " components\n";
        $res = $sqlite->query('SELECT count(*) AS nb FROM versions');
        echo $res->fetchArray(SQLITE3_ASSOC)['nb'], " versions\n";
        $res = $sqlite->query('SELECT count(*) AS nb FROM classes');
        echo $res->fetchArray(SQLITE3_ASSOC)['nb'], " classes\n";
        $res = $sqlite->query('SELECT count(*) AS nb FROM interfaces');
        echo $res->fetchArray(SQLITE3_ASSOC)['nb'], " interfaces\n";
        $res = $sqlite->query('SELECT count(*) AS nb FROM traits');
        echo $res->fetchArray(SQLITE3_ASSOC)['nb'], " traits\n";
        echo "\n";
    }

    public function checkExtensionsIni() {
        $files = glob('data/*.ini');
        
        foreach($files as $file) {
            $ini = parse_ini_file($file);
            if (!isset($ini['functions'])) {
                continue; 
            }

            if (!isset($ini['traits'])) {
                print "$file is missing traits[] = \n"; 
            }
/*
            if (!isset($ini['namespaces'])) {
                print "$file is missing namespaces[] = \n"; 
            }
*/
            if (isset($ini['trait'])) {
                print "$file is using trait[] = \n"; 
            }
        }
    }
    
    public function checkDoc() {
        
        // no Exakat.com
        $res = shell_exec('grep -r "exakat\.com" docs');
        if ($res) {
            print "Exakat.com was found! \n$res\n";
        }
        
        // Update doc version
        $php = file_get_contents('library/Exakat.php');

        preg_match('/const VERSION = \'(\d+.\d+.\d+)\'/is', $php, $version);
        $version = $version[1];
        preg_match('/const BUILD = (\d+)/is', $php, $build);
        $build = $build[1];
        
//        $md = file_get_contents('docs/manual.md');
//        $md = preg_replace('/This manual is for Exakat version (\d+.\d+.\d+) \(build (\d+)\)/', 
//                           'This manual is for Exakat version ('.$version.') (build '.$build.')', $md);
//        file_put_contents('docs/manual.md', $md);
    }

    public function checkClassnames() {
        $files = Finder::create()->ignoreVCS(true)
                                 ->files()
                                 ->in('library')
                                 ->name('*.php');
        
        foreach($files as $file) {
            if ($file == 'library/helpers.php') { continue; }
            
            $code = file_get_contents($file);
            if (!preg_match('#(class|interface) ([^ ]+)#is', $code, $r)) {
                echo 'No class in ', $file, "\n";
                continue;
            }
            
            $filename = substr(basename($file), 0, -4);
            if ($filename != $r[2]) {
                echo 'Classname error in ', $file, "\n";
            }
        }
    }

    public function checkReportFormat() {
        $php = file_get_contents('library/Reports/Reports.php');
        preg_match('/    CONST FORMATS        = \[(.*?)\];/is', $php, $r);
        
        $formats = explode(',', $r[1]);
        $formats = array_map(function($x) { return trim($x, "' "); }, $formats);
        
        $files = glob('./library/Reports/*');
        $files = array_map(function($x) { return substr(basename($x), 0, -4);}, $files);
        $files = array_filter($files, function($x) { return $x !== 'Reports'; });
        sort($files);
        
        $missing = array_diff($files, $formats);
        if (count($missing) > 0) {
            print count($missing).' format are missing in ./library/Reports/Reports.php : '.join(', ', $missing)."\n";
            print "    CONST FORMATS = ['".join("', '", $files)."'];\n";
        }

        $toomany = array_diff($formats, $files);
        if (count($toomany) > 0) {
            print count($toomany).' format are too many in ./library/Reports/Reports.php : '.join(', ', $toomany)."\n";
            print "    CONST FORMATS        = ['".join("', '", $files)."'];\n";
        }
    }
    
    public function checkAppinfo() {
        $php = file_get_contents('library/Report/Content/Appinfo.php');
        preg_match_all("#'([A-Z][a-z0-9]+?/[A-Z][a-zA-Z0-9]+?)'#s", $php, $r);
        foreach($r[1] as $class) {
            if ($class == 'Extensions/Extskeleton') {
                continue;
            }

            if (!file_exists("./library/Analyzer/$class.php")) {
                print "./library/Analyzer/$class.php";
                echo 'Appinfo is missing a class : ', $class, "\n";
            }
        }
    }

    public function checkData() {
        //php_constant_arguments.json
        $functions = json_decode(file_get_contents('data/php_constant_arguments.json'));
        $php_constants = parse_ini_file('data/php_constants.ini');
        $php_constants = $php_constants['constants'];

        $total = 0;
        foreach($functions as $style) { // combinaison or alternative
            foreach($style as $methods) { // method name
                foreach($methods as $method) {
                    $diff = array_diff((array) $method, $php_constants);
                    if (!empty($diff)) {
                        print 'constants[] = \''.implode("';\nconstants[] = '", $diff)."'\n";
                    }
                    $total += count($diff);
                }
            }
        }

        //methods.json
        $sqlite = new Sqlite3('data/methods.sqlite');
        // function column must be lowercase
        $sqlite->query('UPDATE bugfixes SET function=LOWER(function)');
        unset($sqlite);

    }
}

function error_handler ( $errno , $errstr , $errfile = '', $errline = null, $errcontext = array()) {
    echo __METHOD__, "\n";
    return true;
}

?>