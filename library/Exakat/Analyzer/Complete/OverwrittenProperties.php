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

namespace Exakat\Analyzer\Complete;

use Exakat\Analyzer\Analyzer;

class OverwrittenProperties extends Analyzer {
    public function analyze() {
        // class x { protected $p = 1;}
        // class xx extends x { protected $p = 1;}
        $this->atomIs(array('Propertydefinition', 'Virtualproperty'), Analyzer::WITHOUT_CONSTANTS)
              ->savePropertyAs('propertyname', 'name')
              ->goToInstruction(array('Class', 'Classanonymous', 'Trait'))
              ->goToAllParentsTraits(Analyzer::INCLUDE_SELF)
              ->outIs('PPP')
              ->outIs('PPP')
              ->atomIs(array('Propertydefinition', 'Virtualproperty'), Analyzer::WITHOUT_CONSTANTS)
              ->samePropertyAs('propertyname', 'name',  Analyzer::CASE_SENSITIVE)
              ->raw('where(neq("first"))')
              ->addEFrom('OVERWRITE', 'first')
              ->back('first');
        $this->prepareQuery();
    }
}

?>
