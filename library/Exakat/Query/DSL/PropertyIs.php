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

class PropertyIs extends DSL {
    public function run() {
        list($property, $code, $caseSensitive) = func_get_args();

        assert($this->assertProperty($property));

        if (is_array($code) && empty($code) ) {
            return new Command(Query::NO_QUERY);
        }
        
        if ($caseSensitive === Analyzer::CASE_SENSITIVE) {
            $caseSensitive = '';
        } else {
            $this->tolowercase($code);
            $caseSensitive = '.toString().toLowerCase()';
        }

        // code is a variable. We don't know if it is an array
        if (is_array($code) && !empty(array_intersect($code, $this->availableVariables))) {
            return new Command('filter{it.get().value("' . $property . '")' . $caseSensitive . ' == ' . $code[0] . '}', array());
        } elseif (is_string($code) && in_array($code, $this->availableVariables)) {
            return new Command('filter{it.get().value("' . $property . '")' . $caseSensitive . ' == ' . $code . '}', array());
        } elseif (is_array($code)) {
            return new Command('filter{ it.get().value("' . $property . '")' . $caseSensitive . ' in ***; }', array(makeArray($code)));
        } else {
            return new Command('filter{it.get().value("' . $property . '")' . $caseSensitive . ' == ***}', array(makeArray($code)));
        }
    }
}
?>
