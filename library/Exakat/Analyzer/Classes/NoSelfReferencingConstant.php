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

class NoSelfReferencingConstant extends Analyzer {
    public function analyze() {
        // const c = self::b
        // const c = self::b + 1
        // const c = a::b
        // const c = a::b + 1
        $this->atomIs('Const')
             ->inIs('CONST')
             ->savePropertyAs('fullnspath', 'fqn')
             ->back('first')
             ->outIs('CONST')
             ->_as('results')
            
             ->outIs('NAME')
             ->savePropertyAs('code', 'name')
             ->inIs('NAME')
             
             ->outIs('VALUE')
             ->atomInsideNoDefinition('Staticconstant')
             ->outIs('CLASS')
             ->samePropertyAs('fullnspath', 'fqn')
             ->inIs('CLASS')
             ->outIs('CONSTANT')
             ->samePropertyAs('code', 'name', self::CASE_SENSITIVE)

             ->back('results');
        $this->prepareQuery();
    }
}

?>
