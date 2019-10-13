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

class MismatchedTypehint extends Analyzer {
    public function dependsOn() {
        return array('Complete/OverwrittenMethods',
                     'Complete/MakeClassMethodDefinition',
                     'Complete/PropagateCalls',
                     'Complete/FollowClosureDefinition',
                    );
    }

    public function analyze() {
        // Based on calls to a function
        $this->atomIs(self::$FUNCTIONS_ALL)
             ->outIs('ARGUMENT')
             ->_as('results')
             ->outIs('TYPEHINT')
             ->savePropertyAs('fullnspath', 'typehint')
             ->inIs('TYPEHINT')
             ->outIs('NAME')
             ->outIs('DEFINITION')
             ->has('rank')
             ->savePropertyAs('rank', 'ranked')
             ->inIs('ARGUMENT')
             ->atomIs('Functioncall')
             ->inIs('DEFINITION')
             ->checkDefinition()
             ->back('results');
        $this->prepareQuery();

        // Based on Methodcalls : still missing the class of the object
        $this->atomIs(self::$FUNCTIONS_ALL)
             ->outIs('ARGUMENT')
             ->_as('results')
             ->outIs('TYPEHINT')
             ->savePropertyAs('fullnspath', 'typehint')
             ->inIs('TYPEHINT')
             ->outIs('NAME')
             ->outIs('DEFINITION')
             ->has('rank')
             ->savePropertyAs('rank', 'ranked')
             ->inIs('ARGUMENT')
             ->inIs('METHOD')
             ->atomIs('Methodcall')
             ->inIs('DEFINITION')
             ->checkDefinition()
             ->back('results');
        $this->prepareQuery();

        // Based on staticmethodcall
        $this->atomIs(self::$FUNCTIONS_ALL)
             ->outIs('ARGUMENT')
             ->_as('results')
             ->outIs('TYPEHINT')
             ->savePropertyAs('fullnspath', 'typehint')
             ->inIs('TYPEHINT')
             ->outIs('NAME')
             ->outIs('DEFINITION')
             ->has('rank')
             ->savePropertyAs('rank', 'ranked')
             ->inIs('ARGUMENT')
             ->savePropertyAs('code', 'method')
             ->inIs('METHOD')
             ->atomIs('Staticmethodcall')
             ->outIs('CLASS')
             ->inIs('DEFINITION')
             ->outIs('METHOD')
             ->outIs('NAME')
             ->samePropertyAs('code', 'method')
             ->inIs('NAME')
             ->checkDefinition()
             ->back('results');
        $this->prepareQuery();
    }
    
    private function checkDefinition() {
        $this->outIs('ARGUMENT')
             ->samePropertyAs('rank', 'ranked')
             ->outIs('TYPEHINT')
             ->notSamePropertyAs('fullnspath', 'typehint')
             ->not(
                $this->side()
                     ->inIs('DEFINITION')
                     ->goToAllParents(self::INCLUDE_SELF)
                     ->notSamePropertyAs('fullnspath', 'typehint')
             );

        return $this;
    }
}

?>
