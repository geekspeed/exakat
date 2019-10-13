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

class DisconnectedClasses extends Analyzer {
    public function dependsOn() {
        return array('Complete/SetClassMethodRemoteDefinition',
                    );
    }

    public function analyze() {
        $this->atomIs('Class')
             ->hasOut('EXTENDS')
             ->savePropertyAs('fullnspath', 'fnp')
             // No usage of method in the parent
             ->not(
                $this->side()
                     ->outIs('DEFINITION')
                     ->atomIs(array('This', 'Static', 'Self'))
                     ->inIs(array('OBJECT', 'CLASS'))
                     ->atomIs(array('Methodcall', 'Staticmethodcall'))
                     ->inIs('DEFINITION')
                     ->goToClass()
                     ->fullnspathIsNot('fullnspath', 'fnp')
             )

             // No usage of property in the parent
             ->not(
                $this->side()
                     ->outIs('DEFINITION')
                     ->atomIs(array('This', 'Static', 'Self'))
                     ->inIs(array('OBJECT', 'CLASS'))
                     ->atomIs(array('Member', 'Staticproperty'))
                     ->inIs('DEFINITION')
                     ->goToClass()
                     ->fullnspathIsNot('fullnspath', 'fnp')
             )

             // No usage of method from the parent
             ->not(
                $this->side()
                     ->collectMethods('methods')
                     ->goToAllParents(self::EXCLUDE_SELF)
                     ->outIs('DEFINITION')
                     ->atomIs(array('This', 'Static', 'Self'))
                     ->inIs(array('OBJECT', 'CLASS'))
                     ->atomIs(array('Methodcall', 'Staticmethodcall'))
                     ->outIs('METHOD')
                     ->outIs('NAME')
                     ->raw('filter{ it.get().value("code") in methods}')
             )

             ->back('first');
        $this->prepareQuery();
    }
}

?>
