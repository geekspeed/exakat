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

namespace Exakat\Analyzer\Variables;

use Exakat\Analyzer\Analyzer;

class Overwriting extends Analyzer {
    public function analyze() {
        // $dir = substr($dir, 0, -1)
        $this->atomIs('Assignation')
             ->codeIs('=')
             ->outIs('LEFT')
             ->atomIs('Variable')
             ->savePropertyAs('code', 'destination')
             ->inIs('LEFT')
             ->outIs('RIGHT')
             ->atomIsNot('Cast')
             ->atomInsideNoDefinition(self::$VARIABLES_USER)
             ->samePropertyAs('code', 'destination', self::CASE_SENSITIVE)
             ->back('first');
        $this->prepareQuery();

        // $g = function ($a, $b) use ($g) {}
        $this->atomIs('Assignation')
             ->codeIs('=')
             ->outIs('LEFT')
             ->atomIs('Variable')
             ->savePropertyAs('code', 'destination')
             ->inIs('LEFT')
             ->outIs('RIGHT')
             ->atomIs('Closure')
             ->outIs('USE')
             ->samePropertyAs('code', 'destination', self::CASE_SENSITIVE)
             ->back('first');
        $this->prepareQuery();
    }
    
    // todo : add cases of on-the-spot modification (like sort())
}

?>
