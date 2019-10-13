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

class OneDotOrObjectOperatorPerLine extends Analyzer {
    public function analyze() {
        // Two expressions in a row
        $this->atomIs(array('Member', 'Methodcall'))
             ->hasNoIn('OBJECT')
             ->savePropertyAs('line', 'row')
             ->outIs('OBJECT')
             ->atomIs(array('Member', 'Methodcall'))
             ->samePropertyAs('line', 'row')
             ->back('first');
        $this->prepareQuery();

        // Two expressions with HTML between
        $this->atomIs('Concatenation')
             ->outIs('CONCAT')
             ->savePropertyAs('line', 'row')
             ->nextSibling('CONCAT')
             ->samePropertyAs('line', 'row')
             ->nextSibling('CONCAT')
             ->samePropertyAs('line', 'row')
             ->back('first');
        $this->prepareQuery();

        // f('a'.'b', $c->d);
        $this->atomIs('Concatenation')
             ->hasIn('ARGUMENT')
             ->savePropertyAs('line', 'row')
             ->nextSibling('ARGUMENT')
             ->atomIs(array('Concatenation', 'Methodcall', 'Member'))
             ->samePropertyAs('line', 'row')
             ->inIs('ARGUMENT');
        $this->prepareQuery();
    }
}

?>
