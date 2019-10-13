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

class ShouldUseSelf extends Analyzer {

    public function analyze() {
        // full nsname\classname instead of self
        $this->atomIs('Staticconstant')
             ->hasClass()
             ->outIs('CLASS')
             ->atomIs(self::$STATIC_NAMES)
             ->atomIsNot(array('Parent', 'Self'))
             ->savePropertyAs('fullnspath', 'fns')
             ->goToClass()
             ->goToAllParents(self::INCLUDE_SELF)
             ->samePropertyAs('fullnspath', 'fns')
             ->back('first');
        $this->prepareQuery();

        $this->atomIs('Staticproperty')
             ->hasClass()
             ->outIs('CLASS')
             ->atomIs(self::$STATIC_NAMES)
             ->savePropertyAs('fullnspath', 'fns')
             ->goToClass()
             ->goToAllParents(self::INCLUDE_SELF)
             ->samePropertyAs('fullnspath', 'fns')
             ->back('first');
        $this->prepareQuery();

        $this->atomIs('Staticmethodcall')
             ->hasClass()
             ->outIs('CLASS')
             ->atomIs(self::$STATIC_NAMES)
             ->savePropertyAs('fullnspath', 'fns')
             ->goToClass()
             ->goToAllParents(self::INCLUDE_SELF)
             ->samePropertyAs('fullnspath', 'fns')
             ->back('first');
        $this->prepareQuery();

        $this->atomIs('Staticclass')
             ->hasClass()
             ->outIs('CLASS')
             ->atomIs(self::$STATIC_NAMES)
             ->savePropertyAs('fullnspath', 'fns')
             ->goToClass()
             ->samePropertyAs('fullnspath', 'fns')
             ->back('first');
        $this->prepareQuery();
    }
}

?>
