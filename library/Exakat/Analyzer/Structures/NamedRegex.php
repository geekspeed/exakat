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

class NamedRegex extends Analyzer {
    public function analyze() {
        // preg_match_all('/(?<name>a)/', $x, $r); echo $r['name'][0]
        $this->atomFunctionIs(array('\\preg_match', '\\preg_match_all'))
             ->outWithRank('ARGUMENT', 2)
             ->inIs('DEFINITION')
             ->outIs('DEFINITION')
             ->atomIs('Variablearray')
             ->inIs('VARIABLE')
             ->_as('results')
             ->outIs('INDEX')
             ->atomIs('Integer')
             ->back('results');
        $this->prepareQuery();
    }
}

?>
