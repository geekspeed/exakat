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

class ConstantScalarExpression extends Analyzer {
    protected $phpVersion = '5.6+';
    
    public function analyze() {
        $validAtoms = self::$LITERALS;
        $validAtoms[] = 'Void';

        // const x = 1 + 2;
        $this->atomIs('Const')
             ->outIs('CONST')
             ->outIs('VALUE')
             ->atomIsNot($validAtoms)
             ->back('first');
        $this->prepareQuery();

        // function x( $a = 3 . '3', $b = array())
        $this->atomIs(self::$FUNCTIONS_ALL)
             ->outIs('ARGUMENT')
             ->outIs('DEFAULT')
             ->atomIsNot($validAtoms)
             ->back('first');
        $this->prepareQuery();
    }
}

?>
