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

class NoReturnUsed extends Analyzer {
    public function analyze() {
        // Functions
        $this->atomIs('Function')
             ->outIs('BLOCK')
             ->atomInsideNoDefinition('Return')
             ->outIs('RETURN')
             ->atomIsNot('Void')
             ->back('first')
             ->hasOut('DEFINITION')
             ->not(
                $this->side()
                     ->filter(
                        $this->side()
                             ->outIs('DEFINITION')
                             ->hasNoIn('EXPRESSION')
                     )
             );
        $this->prepareQuery();

        // Methods
        $this->atomIs(array('Method', 'Magicmethod'))
             ->is('static', true)
             ->savePropertyAs('lccode', 'methode')
             ->outIs('BLOCK')
             ->atomInsideNoDefinition('Return')
             ->outIs('RETURN')
             ->atomIsNot('Void')
             ->back('first')
             ->goToClass()
             ->filter(
                $this->side()
                     ->outIs('DEFINITION')
                     ->inIs('CLASS')
                     ->atomIs('Staticmethodcall')
                     ->outIs('METHOD')
                     ->tokenIs('T_STRING')
                     ->samePropertyAs('code', 'methode', self::CASE_INSENSITIVE)
             )
             ->not(
                $this->side()
                     ->filter(
                        $this->side()
                             ->outIs('DEFINITION')
                             ->inIs('CLASS')
                             ->atomIs('Staticmethodcall')
                             ->outIs('METHOD')
                             ->tokenIs('T_STRING')
                             ->samePropertyAs('code', 'methode', self::CASE_INSENSITIVE)
                             ->inIs('METHOD')
                             ->hasNoIn('EXPRESSION')
                     )
             )
             ->back('first');
        $this->prepareQuery();
    }
}

?>
