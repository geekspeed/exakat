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

namespace Exakat\Analyzer\Php;

use Exakat\Analyzer\Analyzer;

class UsePathinfoArgs extends Analyzer {
    public function analyze() {
        // Only tested inside function, for smaller scope
        // This may be upgraded with array name (currently ignored)
        $this->atomFunctionIs('\\pathinfo')
             ->noChildWithRank('ARGUMENT', 1)
             ->goToFunction()
             // 2 indices are used at least
             ->filter(
                $this->side()
                     ->outIs('BLOCK')
                     ->atomInsideNoDefinition('Array')
                     ->outIs('INDEX')
                     ->atomIs('String')
                     ->noDelimiterIs(array('dirname', 'basename', 'extension', 'filename'))
                     ->dedup('noDelimiter')
                     ->raw('count().is(lt(3))')
             )
             ->back('first');
        $this->prepareQuery();

        //$extension = substr(strrchr($path, "."), 1);
        $this->atomFunctionIs('\\substr')
             ->outWithRank('ARGUMENT', 1)
             ->is('intval', 1)
             ->inIs('ARGUMENT')
             ->outWithRank('ARGUMENT', 0)
             ->functioncallIs('\\strrchr')
             ->outWithRank('ARGUMENT', 1)
             ->is('noDelimiter', '.')
             ->back('first');
        $this->prepareQuery();

        //$extension = array_pop(explode('.', $path));
        $this->atomFunctionIs('\\array_pop')
             ->outWithRank('ARGUMENT', 0)
             ->functioncallIs(array('\\explode', '\\split'))
             ->outWithRank('ARGUMENT', 0)
             ->is('noDelimiter', '.')
             ->back('first');
        $this->prepareQuery();
    }
}

?>
