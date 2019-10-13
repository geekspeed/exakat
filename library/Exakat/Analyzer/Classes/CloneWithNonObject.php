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

namespace Exakat\Analyzer\Classes;

use Exakat\Analyzer\Analyzer;

class CloneWithNonObject extends Analyzer {
    public function analyze() {
        // clone x
        $this->atomIs('Clone')
             ->outIs('CLONE')
             ->atomIsNot(array_merge(Analyzer::$VARIABLES_ALL, array('New', 'This', 'Clone')))
             // can't return a scalar, a nullable, or anything untyped
             ->not(
                $this->side()
                     ->atomIs(self::$CALLS)
                     ->inIs('DEFINITION')
                     ->outIs('RETURNTYPE')
                     ->atomIsNot(array('Void', 'Scalartypehint'))
                     ->isNot('nullable', true)
             )
             ->not(
                $this->side()
                     ->atomIs(self::$CALLS)
                     ->hasNoIn('DEFINITION')
             )
             ->not(
                $this->side()
                     ->atomIs(array('Member'))
                     ->inIs('DEFINITION')
                     ->outIs('DEFAULT')
                     ->atomIsNot(array('Null', 'New', 'Clone'))
             )
             ->back('first');
        $this->prepareQuery();
    }
}

?>
