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

class BuriedAssignation extends Analyzer {
    public function analyze() {
        // ($x = new b)->c
        $this->atomIs('Assignation')
             ->hasNoParent('Declare', array('ARGUMENT'))
             ->hasNoParent('For', array('EXPRESSION', 'INIT', 'FINAL', 'INCREMENT'))

             ->codeIs('=')

             // avoid chained assignation
             ->hasNoParent('Assignation', 'RIGHT')
             
             // in a property definition
             ->inIsIE('CODE')
             ->hasNoIn('EXPRESSION')
             ->hasNoIn(array('CONST', 'CONDITION', 'PPP', 'STATIC'))
             ->goToExpression()
             ->atomIsNot('For');
        $this->prepareQuery();

        // Special for for(;;) : only if several instructions with comma
        $this->atomIs('For')
             ->outIs(array('INIT', 'FINAL', 'INCREMENT'))
             ->isMore('count', 1)
             ->outIs('EXPRESSION')
             ->outIsIE('CODE')
             ->atomIs('Assignation')
             ->back('first');
        $this->prepareQuery();
    }
}

?>
