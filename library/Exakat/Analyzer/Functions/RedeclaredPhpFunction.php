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


namespace Exakat\Analyzer\Functions;

use Exakat\Analyzer\Analyzer;

class RedeclaredPhpFunction extends Analyzer {
    public function analyze() {
        // function split() {}
        $extensions = $this->loadIni('php_distribution_53.ini', 'ext');

        $e = array();
        foreach($extensions as $ext) {
            if ($iniFile = $this->loadIni($ext . '.ini', 'functions')) {
                $e[] = $iniFile;
            }
        }
        $extensionFunctions = array_merge(...$e);
        $extensionFunctions = array_values(array_unique($extensionFunctions));
        $extensionFunctions = makefullnspath($extensionFunctions);

        $this->atomIs('Function')
             ->regexIs('fullnspath', '^\\\\\\\\[^\\\\\\\\]+\\$')
             ->fullnspathIs($extensionFunctions);
        $this->prepareQuery();
    }
}

?>
