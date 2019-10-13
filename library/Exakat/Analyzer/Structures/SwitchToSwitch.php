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

class SwitchToSwitch extends Analyzer {
    public function analyze() {
        // 3 ifthen chained with elseif
        $this->atomIs('Ifthen')
             ->outIs('CONDITION')
             ->atomIs('Comparison')
             ->inIs('CONDITION')
             ->tokenIs('T_IF')
             ->outIs('ELSE')
             ->raw('coalesce( __.hasLabel("Sequence").has("count", 1).out("EXPRESSION"), __.filter{ true; } )')

             ->atomIs('Ifthen')
             ->outIs('CONDITION')
             ->atomIs('Comparison')
             ->inIs('CONDITION')
             ->outIs('ELSE')
             ->outIsIE('EXPRESSION')
             ->raw('coalesce( __.hasLabel("Sequence").has("count", 1).out("EXPRESSION"), __.filter{ true; } )')

             ->atomIs('Ifthen')
             ->outIs('CONDITION')
             ->atomIs('Comparison')
             ->inIs('CONDITION')

             ->back('first');
        $this->prepareQuery();
    }
}

?>
