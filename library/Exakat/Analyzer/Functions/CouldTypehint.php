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

namespace Exakat\Analyzer\Functions;

use Exakat\Analyzer\Analyzer;

class CouldTypehint extends Analyzer {
    public function analyze() {
        // An argument is processed with a instanceof later
        $this->atomIs(self::$FUNCTIONS_ALL)
             ->outIs('ARGUMENT')
             ->outIs('TYPEHINT')
             ->atomIs('Void')
             ->inIs('TYPEHINT')

             ->outIs('NAME')
             ->outIs('DEFINITION')
             ->inIs('VARIABLE')
             ->atomIs('Instanceof');
        $this->prepareQuery();

        // An argument is processed with a instanceof later
        $this->atomIs(self::$FUNCTIONS_ALL)
             ->outIs('ARGUMENT')
             ->outIs('TYPEHINT')
             ->atomIs('Void')
             ->inIs('TYPEHINT')

             ->outIs('NAME')
             ->outIs('DEFINITION')
             ->inIs('ARGUMENT')
             ->functioncallIs(array('\\is_array', '\\is_string', '\\is_int', '\\is_real', '\\is_double'))
             ->goToInstruction(array('Ifthen', 'Ternary'))
             ->outIs(array('THEN', 'ELSE'))
             ->atomInside(array('Return', 'Throw', 'Exit'))
             ->back('first');
        $this->prepareQuery();
    }
}

?>
