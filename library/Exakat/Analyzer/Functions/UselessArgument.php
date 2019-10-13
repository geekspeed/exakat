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

class UselessArgument extends Analyzer {
    public function dependsOn() {
        return array('Complete/PropagateCalls',
                     'Complete/FollowClosureDefinition',
                    );
    }

    public function analyze() {
        // function foo($a)
        // foo(2); foo(2); foo(2); // always provide the same arg
        $this->atomIs(self::$FUNCTIONS_ALL)
             ->outIs('ARGUMENT')
             ->savePropertyAs('rank', 'ranked')
             ->back('first')
             // More than 2 calling
             ->filter(
                $this->side()
                     ->outIs('DEFINITION')
                     ->raw('count().is(gt(2))')
             )
             
             ->filter(
                $this->side()
                     ->outIs('DEFINITION')
                     ->outIsIE('METHOD')
                     ->outWithRank('ARGUMENT', 'ranked')
                     ->raw('groupCount("m").by("fullcode").cap("m").filter{ it.get().size() == 1}')
             )
             ->back('first');
        $this->prepareQuery();
    }
}

?>
