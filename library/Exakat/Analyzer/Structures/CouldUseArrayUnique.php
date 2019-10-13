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

class CouldUseArrayUnique extends Analyzer {
    public function analyze() {
        //foreach ($a as $b) {
        //    if (!in_array($b, $c)) {
        //        $c[] = $b;
        //        }
        //}
        $this->atomIs('Foreach')
             ->outIs(array('INDEX', 'VALUE'))
             ->savePropertyAs('fullcode', 'increment')
             ->back('first')
             ->outIs('BLOCK')

             ->atomInsideNoDefinition('Ifthen')
             ->_as('ifthen')
             ->outIs('CONDITION')

             ->atomInsideNoDefinition('Functioncall')
             ->functioncallIs('\\in_array')
             ->outWithRank('ARGUMENT', 0)
             ->samePropertyAs('fullcode', 'increment')
             ->inIs('ARGUMENT')

             ->outWithRank('ARGUMENT', 1)
             ->savePropertyAs('fullcode', 'collector')
             ->back('ifthen')

             ->outIs(array('THEN', 'ELSE'))
             ->atomInsideNoDefinition('Arrayappend')
             ->outIs('APPEND')
             ->samePropertyAs('fullcode', 'collector')
             ->inIs('APPEND')
             ->inIs('LEFT')
             ->atomIs('Assignation')
             ->outIs('RIGHT')
             ->samePropertyAs('fullcode', 'increment')

             ->back('first');
        $this->prepareQuery();
    }
}

?>
