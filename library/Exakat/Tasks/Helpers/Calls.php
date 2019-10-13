<?php
/*
 * Copyright 2012-2019 Damien Seguy – Exakat SAS <contact(at)exakat.io>
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


namespace Exakat\Tasks\Helpers;

use Exakat\Exceptions\LoadError;

class Calls {
    private $callsSqlite   = null;
    private $projects_root = '';
    
    private $definitions = array();
    private $calls       = array();
    
    public function __construct($projects_root, \Sqlite3 $sqlite) {
        $this->projects_root = $projects_root;

        $this->callsSqlite = $sqlite;

        $calls = <<<'SQL'
CREATE TABLE IF NOT EXISTS calls (
    type STRING,
    fullnspath STRING,
    globalpath STRING,
    atom STRING,
    id INTEGER
)
SQL;
        $this->callsSqlite->query($calls);

        $definitions = <<<'SQL'
CREATE TABLE IF NOT EXISTS definitions (
    type STRING,
    fullnspath STRING,
    globalpath STRING,
    atom STRING,
    id INTEGER
)
SQL;
        $this->callsSqlite->query($definitions);

        $definitions = <<<'SQL'
CREATE TABLE IF NOT EXISTS globals (
    origin INTEGER,
    destination INTEGER
)
SQL;
        $this->callsSqlite->query($definitions);
    }

    public function reset() {
        $this->calls       = array();
        $this->definitions = array();
        $this->globals     = array();
    }

    public function save() {
        if (!empty($this->calls)) {
            $query = 'INSERT INTO calls VALUES ' . implode(', ', $this->calls);
            $this->callsSqlite->query($query);
            $this->calls = array();
        }

        if (!empty($this->definitions)) {
            $query = 'INSERT INTO definitions VALUES ' . implode(', ', $this->definitions);
            $this->callsSqlite->query($query);
            $this->definitions = array();
        }

        if (!empty($this->globals)) {
            $query = 'INSERT INTO globals VALUES ' . implode(', ', $this->globals);
            $this->callsSqlite->query($query);
            $this->globals = array();
        }
    }

    public function addGlobal($origin, $destination) {
        $this->globals[] = "('{$origin}','{$destination}')";
    }

    public function addCall($type, $fullnspath, $call) {
        if (empty($fullnspath)) {
            return;
        }

        // No need for This
        if (in_array($call->atom, array('Parent',
                                        'Isset',
                                        'List',
                                        'Empty',
                                        'Eval',
                                        'Exit',
                                        ))) {
            return;
        }
        
        if (!is_string($fullnspath)) {
            throw new LoadError( 'Warning : fullnspath is not a string : it is ' . gettype($fullnspath) . PHP_EOL);
        }

        if ($type === 'class') {
            $globalpath = $fullnspath;
        } else {
            $globalpath = $this->makeGlobalPath($fullnspath);
        }

        $this->calls[] = "('{$type}',
                           '{$this->callsSqlite->escapeString($fullnspath)}',
                           '{$this->callsSqlite->escapeString($globalpath)}',
                           '{$call->atom}',
                           '{$call->id}')";
    }

    public function addNoDelimiterCall($call) {
        if (empty($call->noDelimiter)) {
            return; // Can't be a class anyway.
        }
        if ((int) $call->noDelimiter !== 0) {
            return; // Can't be a class anyway.
        }
        // single : is OK
        // \ is OK (for hardcoded path)
        if (preg_match_all('/[$ #?;%^\*\'\"\. <>~&,|\(\){}\[\]\/\s=\+!`@\-]/is', $call->noDelimiter, $r)) {
            return; // Can't be a class anyway.
        }

        if (strpos($call->noDelimiter, '::') === false) {
            $types = array('function', 'class');

            $fullnspath = mb_strtolower($call->noDelimiter);
            if (empty($fullnspath) || $fullnspath[0] !== '\\') {
                $fullnspath = '\\' . $fullnspath;
            }
            if (strpos($fullnspath, '\\\\') !== false) {
                $fullnspath = stripslashes($fullnspath);
            }
        } else {
            $fullnspath = mb_strtolower($call->noDelimiter);

            if (empty($fullnspath)) {
                return;
            } elseif ($fullnspath[0] === ':') {
                return;
            } elseif ($fullnspath[0] !== '\\') {
                $fullnspath = '\\' . $fullnspath;
            }

            $types = array('staticmethod', 'staticconstant');
        }

        $atom = 'String';

        foreach($types as $type) {
            $globalpath = $this->makeGlobalPath($fullnspath);
            
            $this->calls[] = "('$type',
                               '{$this->callsSqlite->escapeString($fullnspath)}',
                               '{$this->callsSqlite->escapeString($globalpath)}',
                               '{$atom}',
                               '{$call->id}')";
        }
    }

    public function addDefinition($type, $fullnspath, $definition) {
        if (empty($fullnspath)) {
            return;
        }

        $globalpath = $this->makeGlobalPath($fullnspath);

        $this->definitions[] = "('{$type}',
                                 '{$this->callsSqlite->escapeString($fullnspath)}',
                                 '{$this->callsSqlite->escapeString($globalpath)}',
                                 '{$definition->atom}',
                                 '{$definition->id}')";
    }
    
    private function makeGlobalPath($fullnspath) {
        if ($fullnspath === 'undefined') {
            $globalpath = '';
        } elseif (preg_match('/(\\\\[^\\\\]+)$/', $fullnspath, $r)) {
            $globalpath = $r[1];
        } else {
            $globalpath = substr($fullnspath, strrpos($fullnspath, '\\'));
        }
        
        return $globalpath;
    }
}

?>
