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


namespace Exakat\Query\DSL;

use Exakat\Query\Query;
use Exakat\Analyzer\Analyzer;

class AtomIs extends DSL {
    public function run() {
        list($atoms, $flags) = func_get_args();

        assert($this->assertAtom($atoms));

        $diff = $this->normalizeAtoms($atoms);
        if (empty($diff)) {
            return new Command(Query::STOP_QUERY);
        } elseif ($flags === Analyzer::WITH_CONSTANTS &&
                 array_intersect($diff, array('String', 'Ternary', 'Arrayliteral', 'Integer', 'Null', 'Boolean', 'Magicmethod', 'Float'))) {
            // Ternary are unsupported
            // arrays, members, static members are not supported
            $gremlin = <<<'GREMLIN'
coalesce( __.hasLabel(within(["Identifier", "Nsname", "Staticconstant"])).in("DEFINITION").out("VALUE"),
            // Local constant
          __.hasLabel(within(["Variable"])).in("DEFINITION").out("DEFAULT"),
          
          // literal value, passed as an argument
          __.hasLabel(within(["Variable"])).in("DEFINITION").in("NAME").hasLabel('Parameter').sideEffect{ rank = it.get().value('rank');}.in("ARGUMENT").out("DEFINITION").out("ARGUMENT").filter{ rank == it.get().value('rank');},

          // literal value, passed as an argument
          __.hasLabel(within(["Ternary"])).out("THEN", "ELSE"),

          __.hasLabel(within(["Coalesce"])).out("LEFT", "RIGHT"),
          
          // default case, will be filtered by hasLabel()
          __.filter{true})
.hasLabel(within(***))
GREMLIN;
            return new Command($gremlin, array($diff));
        } else {
            // WITHOUT_CONSTANTS or non-constant atoms
            return new Command('hasLabel(within(***))', array($diff));
        }
    }
}
?>
