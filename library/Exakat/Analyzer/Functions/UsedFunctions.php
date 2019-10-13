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

class UsedFunctions extends Analyzer {
    public function analyze() {
        // function used
        $this->atomIs('Function')
             ->hasOut('DEFINITION');
        $this->prepareQuery();

        // function name used in a string
        $functionsInStrings = $this->query(<<<'GREMLIN'
g.V().hasLabel("String").has("fullnspath").values("fullnspath").unique()
GREMLIN
)->toArray();

        if (!empty($functionsInStrings)) {
            $this->atomIs('Function')
                 ->hasNoOut('DEFINITION')
                 ->fullnspathIs($functionsInStrings);
            $this->prepareQuery();
        }
    }
}

?>
