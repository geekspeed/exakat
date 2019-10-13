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

namespace Exakat\Analyzer\Structures;

use Exakat\Analyzer\Analyzer;

class MultipleTypeVariable extends Analyzer {
    public function analyze() {
        // $a = count('', $a);
        $this->atomFunctionIs('\\count')
             ->outWithRank('ARGUMENT', 0)
             ->savePropertyAs('fullcode', 'variable')
             ->back('first')
             ->inIs('RIGHT')
             ->atomIs('Assignation')
             ->codeIs('=')
             ->outIs('LEFT')
             ->samePropertyAs('fullcode', 'variable')
             ->inIs('LEFT');
        $this->prepareQuery();

        // $a = join('', $a);
        $this->atomFunctionIs(array('\\join', '\\implode', '\\split', '\\explode', '\\unserialize', '\\urldecode', '\\parse_ini_string', '\\http_build_query'))
             ->outIs('ARGUMENT')
             ->savePropertyAs('fullcode', 'variable')
             ->back('first')
             ->inIs('RIGHT')
             ->atomIs('Assignation')
             ->codeIs('=')
             ->outIs('LEFT')
             ->samePropertyAs('fullcode', 'variable', self::CASE_SENSITIVE)
             ->inIs('LEFT');
        $this->prepareQuery();
    }
}

?>
