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

class UnusedArguments extends Analyzer {
    public function dependsOn() {
        return array('Complete/OverwrittenMethods',
                    );
    }

    public function analyze() {
        // Arguments, not reference, function
        $this->atomIs('Parameter')
             ->isNot('reference', true)
             ->outIs('NAME')
             ->savePropertyAs('code', 'varname')
             ->back('first')
             ->inIs('ARGUMENT')
             ->atomIs(array('Function', 'Closure'))
             ->_as('results')
             ->back('first')
             ->outIs('NAME')
             ->hasNoOut('DEFINITION')
             ->back('results');
        $this->prepareQuery();

        // Arguments, not reference, method (class, trait)
        $this->atomIs('Parameter')
             ->isNot('reference', true)
             ->outIs('NAME')
             ->savePropertyAs('code', 'varname')
             ->back('first')
             ->inIs('ARGUMENT')
             ->atomIs(array('Method', 'Magicmethod'))
             ->outIs('NAME')
             ->codeIsNot('__set') // Skip __set, because it may be useful there.
             ->inIs('NAME')
             ->hasNoOut('OVERWRITE')
             ->hasClassTrait()
             ->_as('results')
             ->isNot('abstract', true)
             ->back('first')
             ->outIs('NAME')
             ->not(
                $this->side()
                     ->filter(
                        $this->side()
                             ->outIs('DEFINITION')
                             ->is('isRead', true)
                     )
             )
             ->back('results');
        $this->prepareQuery();

        // Arguments, reference, function
        $this->atomIs('Parameter')
             ->is('reference', true)
             ->outIs('NAME')
             ->savePropertyAs('code', 'varname')
             ->back('first')
             ->inIs('ARGUMENT')
             ->atomIs(self::$FUNCTIONS_ALL)
             ->_as('results')
             ->analyzerIsNot('self')
             ->hasNoClassInterfaceTrait()
             ->back('first')
             ->outIs('NAME')
             ->hasNoOut('DEFINITION')
             ->back('results');
        $this->prepareQuery();

        // Arguments, reference, method
        $this->atomIs('Parameter')
             ->is('reference', true)
             ->outIs('NAME')
             ->savePropertyAs('code', 'varname')
             ->back('first')
             ->inIs('ARGUMENT')
             ->atomIs(self::$FUNCTIONS_ALL)
             ->analyzerIsNot('self')
             ->_as('results')
             ->hasClassTrait()
             ->isNot('abstract', true)
             ->hasNoOut('OVERWRITE')
             ->back('first')
             ->outIs('NAME')
             ->hasNoOut('DEFINITION')
             ->back('results');
        $this->prepareQuery();

        // Arguments in a USE, not a reference
        $this->atomIs('Closure')
             ->analyzerIsNot('self')
             ->outIs('USE')
             ->isNot('reference', true)
             ->savePropertyAs('code', 'varname')
             ->back('first')
             ->outIs('USE')
             ->not(
                $this->side()
                     ->filter(
                        $this->side()
                             ->outIs('DEFINITION')
                             ->is('isRead', true)
                     )
             )
             ->back('first');
        $this->prepareQuery();

        // Arguments in a USE, reference
        $this->atomIs('Closure')
             ->analyzerIsNot('self')
             ->outIs('USE')
             ->is('reference', true)
             ->savePropertyAs('code', 'varname')
             ->back('first')

             ->outIs('USE')
             ->hasNoOut('DEFINITION')
             ->back('first');
        $this->prepareQuery();
    }
}

?>
