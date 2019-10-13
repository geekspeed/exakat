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

class FilterInputSource extends Analyzer {
    public function analyze() {
        // filter_input()
        $this->atomFunctionIs(array('\filter_input', '\filter_input_array'))
             ->back('first');
        $this->prepareQuery();

        // filter_var($_GET), filter_var($_POST['x'])
        $this->atomFunctionIs(array('\filter_var', '\filter_var_array'))
             ->outWithRank('ARGUMENT', 0)
             ->outIsIE('VARIABLE')
             ->atomIs('Phpvariable')
             ->back('first');
        $this->prepareQuery();
    }
}

?>
