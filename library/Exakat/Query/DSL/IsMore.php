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

class IsMore extends DSL {
    public function run() {
        list($value1, $value2) = func_get_args();

        $g1 = $this->makeGremlin($value1);
        $g2 = $this->makeGremlin($value2);

        return new Command("filter{ {$g1} > {$g2};}");
    }
    
    private function makeGremlin($value) {
        // It is an integer
        if (is_int($value)) {
            return $value;
        }
        
        // It is a gremlin variable
        if ($this->isVariable($value)) {
            assert($this->assertVariable($value));
            return $value;
        }

        // It is a gremlin property
        if ($this->isProperty($value)) {
            assert($this->assertProperty($value));
            return " it.get().value(\"{$value}\").toLong()";
        }

        assert(false, '$value must be int or gremlin variable or property in ' . __METHOD__);
    }
}
?>
