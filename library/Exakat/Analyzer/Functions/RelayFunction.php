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

class RelayFunction extends Analyzer {
    public function analyze() {
        // function foo($a, $b, $c) { return foo2($a, $b, $c);}
        $this->atomIs(self::$FUNCTIONS_ALL)
             ->outIsIE('NAME')
             ->codeIsNot(array('__construct', '__destruct'))
             ->inIsIE('NAME')
             ->saveOutAs('args', 'ARGUMENT', '')
             ->outIs('BLOCK')
             ->is('count', 1)
             ->outIs('EXPRESSION')
             ->outIsIE('RETURN')
             ->atomIs(self::$FUNCTIONS_CALLS)
             ->outIsIE('METHOD')
             ->saveOutAs('args2', 'ARGUMENT', '')
             ->raw('filter{ args2 == args; }')
             ->back('first');
        $this->prepareQuery();
    }
}

?>
