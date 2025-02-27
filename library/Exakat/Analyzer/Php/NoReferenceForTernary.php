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

namespace Exakat\Analyzer\Php;

use Exakat\Analyzer\Analyzer;

class NoReferenceForTernary extends Analyzer {
    public function analyze() {
        // function &foo() { return $a ?? $b; }
        $this->atomIs(self::$FUNCTIONS_ALL)
             ->is('reference', true)
             ->outIs('BLOCK')
             ->atomInsideNoDefinition('Return')
             ->outIs('RETURN')
             ->atomIs(array('Ternary', 'Coalesce'))
             ->back('first');
        $this->prepareQuery();

        // function foo() { $a = &$b; $c = rand() ?? $a; }
        $this->atomIs('Variable')
             ->is('reference', true)
             ->inIs('RIGHT')
             ->atomIs('Assignation')
             ->outIs('LEFT')
             ->inIs('DEFINITION')
             ->outIs('DEFINITION')
             ->inIs(array('THEN', 'ELSE'))
             ->atomIs(array('Ternary', 'Coalesce'));
        $this->prepareQuery();

        // function foo(&$a) { 1 ?? $a ; }
        $this->atomIs('Variable')
             ->inIs(array('THEN', 'ELSE'))
             ->atomIs(array('Ternary', 'Coalesce'))
             ->_as('results')
             ->back('first')
             ->inIs('DEFINITION')
             ->inIs('NAME')
             ->is('reference', true)
             ->back('results');
        $this->prepareQuery();
    }
}

?>
