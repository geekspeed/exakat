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

class AddZero extends Analyzer {
    public function analyze() {
        // $x += 0
        $this->atomIs('Assignation')
             ->codeIs(array('+=', '-='), Analyzer::TRANSLATE, Analyzer::CASE_SENSITIVE)
             ->outIs('RIGHT')
             ->is('intval', 0)
             ->is('boolean', false)
             ->atomIsNot('Arrayliteral')
             ->back('first');
        $this->prepareQuery();

        // 0 + ($c = 2)
        $this->atomIs('Addition')
             ->outIs(array('LEFT', 'RIGHT'))
             ->is('intval', 0)
             ->is('boolean', false)
             ->atomIsNot('Arrayliteral')
             ->back('first');
        $this->prepareQuery();

        // $a = 0; $c = $a + 2;
        $this->atomIs('Assignation')
             ->codeIs('=')
             ->outIs('RIGHT')
             ->is('intval', 0)
             ->is('boolean', false)
             ->atomIsNot(array('Arrayliteral'))
             ->back('first')
             ->outIs('LEFT')
             ->atomIs('Variable')
             ->savePropertyAs('fullcode', 'varname')
             ->back('first')
             ->nextSibling()
             ->atomIsNot(array('Function', 'Class', 'Trait', 'Interface', 'Dowhile', 'While', 'Foreach', 'For'))
             ->atomInsideNoDefinition('Addition')
             ->_as('results')
             ->outIs(array('LEFT', 'RIGHT'))
             ->samePropertyAs('fullcode', 'varname')
             ->back('results');
        $this->prepareQuery();
    }
}

?>
