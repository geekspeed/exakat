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

class OverwrittenMethods extends Analyzer {
    public function analyze() {
        // class x { protected function foo()  {}}
        // class xx extends x { protected function foo()  {}}
        $this->atomIs(array('Method', 'Magicmethod'), Analyzer::WITHOUT_CONSTANTS)
              ->outIs('NAME')
              ->savePropertyAs('lccode', 'name')
              ->goToClass()
              ->goToAllParents(Analyzer::EXCLUDE_SELF)
              ->outIs(array('METHOD', 'MAGICMETHOD'))
              ->outIs('NAME')
              ->samePropertyAs('code', 'name',  Analyzer::CASE_INSENSITIVE)
              ->inIs('NAME')
              ->addEFrom('OVERWRITE', 'first')
              ->count();
        $this->rawQuery();

        // interface x { protected function foo()  {}}
        // interface xx extends x { protected function foo()  {}}
        $this->atomIs(array('Method', 'Magicmethod'), Analyzer::WITHOUT_CONSTANTS)
              ->outIs('NAME')
              ->savePropertyAs('lccode', 'name')
              ->goToInterface()
              ->goToAllImplements(Analyzer::EXCLUDE_SELF)
              ->outIs(array('METHOD', 'MAGICMETHOD'))
              ->outIs('NAME')
              ->samePropertyAs('code', 'name',  Analyzer::CASE_INSENSITIVE)
              ->inIs('NAME')
              ->addEFrom('OVERWRITE', 'first')
              ->count();
        $this->rawQuery();
    }
}

?>
