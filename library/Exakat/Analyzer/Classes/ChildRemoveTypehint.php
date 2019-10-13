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

namespace Exakat\Analyzer\Classes;

use Exakat\Analyzer\Analyzer;

class ChildRemoveTypehint extends Analyzer {
    protected $phpVersion = '7.2+';

    public function dependsOn() {
        return array('Complete/OverwrittenMethods',
                    );
    }

    public function analyze() {
        // class a { function foo(B $B){}}
        // class aa extends a { function foo($B){}}
        $this->atomIs('Method')
             ->outIs('ARGUMENT')
             ->savePropertyAs('rank', 'ranked')
             ->outIs('TYPEHINT')
             ->atomIsNot('Void')
             ->back('first')
             
             ->inIs('OVERWRITE')

             ->outWithRank('ARGUMENT', 'ranked')
             ->outIs('TYPEHINT')
             ->atomIs('Void')

             ->back('first');
        $this->prepareQuery();
    }
}

?>
