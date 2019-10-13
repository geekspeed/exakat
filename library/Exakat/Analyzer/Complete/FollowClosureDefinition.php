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

namespace Exakat\Analyzer\Complete;

use Exakat\Analyzer\Analyzer;

class FollowClosureDefinition extends Analyzer {
    public function analyze() {
        // immediate usage : in parenthesis
        $this->atomIs(array('Closure', 'Arrowfunction'), Analyzer::WITHOUT_CONSTANTS)
             ->inIsIE('RIGHT') // Skip all $closure =
              ->inIs('CODE')
              ->atomIs('Parenthesis')
              ->inIs('NAME')
              ->atomIs('Functioncall')
              ->addETo('DEFINITION', 'first')
              ->back('first');
        $this->prepareQuery();

        // local usage
        $this->atomIs(array('Closure', 'Arrowfunction'), Analyzer::WITHOUT_CONSTANTS)
              ->inIs('RIGHT')
              ->outIs('LEFT')
              ->inIs('DEFINITION')  // Find all variable usage
              ->outIs('DEFINITION')
              ->inIs('NAME')
              ->atomIs('Functioncall', Analyzer::WITHOUT_CONSTANTS)
              ->addEFrom('DEFINITION', 'first')
              ->back('first');
        $this->prepareQuery();

        // relayed usage
        $this->atomIs(array('Closure', 'Arrowfunction'), Analyzer::WITHOUT_CONSTANTS)
              ->hasIn('ARGUMENT')
              ->savePropertyAs('rank', 'ranked')
              ->inIs('ARGUMENT')
              ->inIs('DEFINITION')  // Find all variable usage
              ->outIs('ARGUMENT')
              ->samePropertyAs('rank', 'ranked', Analyzer::CASE_SENSITIVE)
              ->outIs('NAME')
              ->outIs('DEFINITION')
              ->inIs('NAME')
              ->atomIs('Functioncall', Analyzer::WITHOUT_CONSTANTS)
              ->addEFrom('DEFINITION', 'first')
              ->back('first');
        $this->prepareQuery();
    }
}

?>
