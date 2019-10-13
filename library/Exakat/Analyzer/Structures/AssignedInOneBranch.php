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

class AssignedInOneBranch extends Analyzer {
    public function analyze() {
        // if() {$b = 1; } else { }
        $this->atomIs('Ifthen')
             ->isNot('token', 'T_ELSEIF')
             ->hasOut('ELSE')
             ->outIs('THEN')
             ->atomInsideNoDefinition('Assignation')
             ->codeIs('=')
             ->outIs('RIGHT')
             ->atomIs(self::$LITERALS)
             ->inIs('RIGHT')
             ->outIs('LEFT')
             ->atomIs(self::$CONTAINERS)
             ->savePropertyAs('fullcode', 'variable')
             ->back('first')
             ->not(
                $this->side()
                     ->filter(
                        $this->side()
                             ->outIs('ELSE')
                             ->tokenIsNot('T_ELSEIF')
                             ->atomInsideNoDefinition('Assignation')
                             ->codeIs('=')
                             ->outIs('LEFT')
                             ->atomIs(array('Variable', 'Staticproperty', 'Member', 'Array'))
                             ->samePropertyAs('fullcode', 'variable', self::CASE_INSENSITIVE)
                     )
             )
             ->back('first');
        $this->prepareQuery();

        // if() {} else {$b = 1;  }
        $this->atomIs('Ifthen')
             ->isNot('token', 'T_ELSEIF')
             ->outIs('ELSE')
             ->atomInsideNoDefinition('Assignation')
             ->codeIs('=')
             ->outIs('RIGHT')
             ->atomIs(self::$LITERALS)
             ->inIs('RIGHT')
             ->outIs('LEFT')
             ->atomIs(self::$CONTAINERS)
             ->savePropertyAs('fullcode', 'variable')
             ->back('first')
             ->not(
                $this->side()
                     ->filter(
                        $this->side()
                             ->outIs('THEN')
                             ->tokenIsNot('T_ELSEIF')
                             ->atomInsideNoDefinition('Assignation')
                             ->codeIs('=')
                             ->outIs('LEFT')
                             ->atomIs(array('Variable', 'Staticproperty', 'Member', 'Array'))
                             ->samePropertyAs('fullcode', 'variable', self::CASE_INSENSITIVE)
                     )
             )
             ->back('first');
        $this->prepareQuery();
    }
}

?>
