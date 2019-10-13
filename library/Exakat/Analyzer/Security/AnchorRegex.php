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

namespace Exakat\Analyzer\Security;

use Exakat\Analyzer\Analyzer;

class AnchorRegex extends Analyzer {
    public function analyze() {
        $pregFunctions = array('\\preg_match_all', '\\preg_match');

        $this->atomFunctionIs($pregFunctions)
             ->outWithRank('ARGUMENT', 0)
             ->atomIs('String')
             ->has('noDelimiter')
             ->raw('filter{ it.get().value("noDelimiter").toString().length() > 3; }')
             ->raw('filter{( it.get().value("noDelimiter").substring(1, 2) != "^") && 
                       ((it.get().value("noDelimiter") =~ "\\\\\\$.[a-zA-Z]*\\$").getCount() == 0); }')
             ->back('first');
        $this->prepareQuery();
    }
}

?>
