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

class DependantAbstractClass extends Analyzer {
    public function dependsOn() {
        return array('Complete/MakeClassConstantDefinition',
                     'Complete/SetClassMethodRemoteDefinition',
                    );
    }

    public function analyze() {
        // Case for $this->method()
        // Case for class::methodcall()
        $this->atomIs(self::$CLASSES_ALL)
             ->is('abstract', true)
             ->outIs('DEFINITION')
             ->atomIs(array('This', 'Self', 'Static', 'Nsname', 'Identifier'))
             ->inIs(array('OBJECT', 'CLASS'))
             ->atomIs(array('Methodcall', 'Staticmethodcall'))
             ->hasNoIn('DEFINITION')
             ->back('first');
        $this->prepareQuery();

        // Case for $this->$properties
        // Case for class::$properties
        $this->atomIs(self::$CLASSES_ALL)
             ->is('abstract', true)
             ->outIs('DEFINITION')
             ->atomIs(array('This', 'Self', 'Static', 'Nsname', 'Identifier'))
             ->inIs(array('OBJECT', 'CLASS'))
             ->atomIs(array('Member', 'Staticproperty'))
             ->isNotPropertyDefined()
             ->back('first');
        $this->prepareQuery();

        // Case for class::constant
        // statics will be solved at excution time, but is set to the trait statically
        $this->atomIs(self::$CLASSES_ALL)
             ->is('abstract', true)
             ->savePropertyAs('fullnspath', 'fnp')
             ->outIs('DEFINITION')
             ->atomIs(array('This', 'Self', 'Static', 'Nsname', 'Identifier'))
             ->inIs('CLASS')
             ->atomIs('Staticconstant')
             ->hasNoIn('DEFINITION')
             ->back('first');
        $this->prepareQuery();
    }
}

?>
