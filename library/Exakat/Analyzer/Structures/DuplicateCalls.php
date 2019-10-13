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

class DuplicateCalls extends Analyzer {
    public function analyze() {
        // This is counting ALL occurences as itself.
        $atoms = array('Methodcall', 'Functioncall');
        
        foreach($atoms as $atom) {
            $calls = $this->query('g.V().hasLabel("' . $atom . '").not( where( __.in("METHOD") ) )
                                      .groupCount("m").by("fullcode").cap("m").next().findAll{ it.value >= 2; }.keySet()');
            $calls = $calls->toArray();
            if (empty($calls)) {
                continue;
            }

            $this->atomIs($atom)
                 ->hasNoIn('METHOD')
                 ->is('fullcode', $calls);
            $this->prepareQuery();
        }
    }
}

?>
