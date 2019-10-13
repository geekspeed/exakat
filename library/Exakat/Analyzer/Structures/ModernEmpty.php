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

class ModernEmpty extends Analyzer {
    protected $phpVersion = '5.5+';
    
    public function analyze() {
        // $a = 2; empty($a) ; in a row
        // only works for variables
        $this->atomIs('Assignation')
             ->outIs('RIGHT')
             ->atomIsNot(array('Null', 'Boolean', 'Integer', 'Float', 'Identifier', 'Nsname'))
             ->hasAtomInside(array('Functioncall', 'Methodcall', 'Staticmethodcall', 'Addition', 'Multiplication', 'Bitshift', 'Power', 'Logical', 'Comparison'))
             ->inIs('RIGHT')
             ->outIs('LEFT')
             ->atomIs(self::$CONTAINERS)
             ->savePropertyAs('fullcode', 'storage')
             ->inIs('LEFT')
             ->nextSiblings()
             ->_as('sibling')
             ->atomInsideNoDefinition('Empty')
             ->outIs('ARGUMENT')
             ->atomIs(self::$CONTAINERS)
             ->samePropertyAs('fullcode', 'storage', self::CASE_SENSITIVE)
             ->back('sibling')
             ->not(
                $this->side()
                     ->atomInsideNoDefinition(self::$CONTAINERS)
                     ->samePropertyAs('fullcode', 'storage', self::CASE_SENSITIVE)
                     ->hasNoParent('Empty', array('ARGUMENT'))
                     ->is('isRead', true)
             )
             ->back('first');
        $this->prepareQuery();
    }
}

?>
