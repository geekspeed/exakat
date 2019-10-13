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

namespace Exakat\Analyzer\Variables;

use Exakat\Analyzer\Analyzer;

class StrangeName extends Analyzer {
    public function analyze() {
        $names = $this->loadIni('php_strange_names.ini', 'variables');

        // typos, like $_PSOT
        $this->atomIs(self::$VARIABLES_ALL)
             ->codeIs($names);
        $this->prepareQuery();

        // multiple identical characters : $aaab
        // skip . as it may be a variadic
        $this->atomIs(self::$CONTAINERS_ROOTS)
             ->regexIs('fullcode', '([^\\\\.])\\\\1{2,}');
        $this->prepareQuery();

        // Using strange type of data
        $this->atomIs(self::$VARIABLES_SCALAR)
             ->outIs('NAME')
             ->atomIs(array('Integer', 'Boolean', 'Float', 'Null', 'Arrayliteral', 'Comparison', 'Bitshift', 'Typecast'))
             ->tokenIsNot('T_STRING_CAST')
             ->back('first');
        $this->prepareQuery();


/*
    // base for letter diversity : this needs nore testing, as diversity drops with size of the name
        $this->atomIs(self::$VARIABLES_ALL)
             ->raw('filter{
it.get().value("code").drop(1).split("").toUnique().size() / it.get().value("code").drop(1).length()
             }');
        $this->prepareQuery();
*/
    }
}

?>
