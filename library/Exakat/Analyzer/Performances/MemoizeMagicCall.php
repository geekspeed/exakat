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

namespace Exakat\Analyzer\Performances;

use Exakat\Analyzer\Analyzer;

class MemoizeMagicCall extends Analyzer {
    public function dependsOn() {
        return array('Complete/CreateMagicProperty',
                    );
    }

    public function analyze() {
        // function foo() { $a = $this->a; $b = $this->a; } // $this->a is routed to __get();
        $this->atomIs(self::$FUNCTIONS_ALL)
             ->outIs('BLOCK')
             ->initVariable('members', '[:]')
             ->filter(
                $this->side()
                     ->atomInsideNoDefinition('Member')
                     ->is('isRead', true)
                     ->filter(
                        $this->side()
                             ->inIs('DEFINITION')
                             ->atomIs('Magicmethod')
                             ->outIs('NAME')
                             ->codeIs('__get')
                     )
                     ->raw(<<<'GREMLIN'
sideEffect{ 
   m = it.get().value("fullcode");
   if (members[m] != null) {
     ++members[m]; 
   } else {
     members[m] = 1; 
   }
}
.fold()

GREMLIN
                )
             )
             ->atomInsideNoDefinition('Member')
             ->raw('filter {members[it.get().value("fullcode")] > 1;}')
             ->back('first');
        $this->prepareQuery();
    }
}

?>
