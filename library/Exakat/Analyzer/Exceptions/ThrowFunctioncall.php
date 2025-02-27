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

namespace Exakat\Analyzer\Exceptions;

use Exakat\Analyzer\Analyzer;

class ThrowFunctioncall extends Analyzer {
    public function analyze() {
        $phpClasses    = $this->loadIni('php_classes.ini', 'classes');
        $phpClassesFnp = makeFullNsPath($phpClasses);
        
        // throw className(), defined class, no function
        $this->atomIs('Throw')
             ->outIs('THROW')
             ->tokenIs(array('T_STRING', 'T_NS_SEPARATOR'))
             ->atomIs('Functioncall')
             ->hasNoFunctionDefinition()
             ->back('first');
        $this->prepareQuery();

        // throw RuntimeException()
        $this->atomIs('Throw')
             ->outIs('THROW')
             ->tokenIs(array('T_STRING', 'T_NS_SEPARATOR'))
             ->atomIsNot(array('Array', 'Functioncall'))
             ->fullnspathIs($phpClassesFnp)
             ->back('first');
        $this->prepareQuery();
    }
}

?>
