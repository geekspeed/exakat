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

class SetClassRemoteDefinitionWithLocalNew extends Analyzer {
    public function dependsOn() {
        return array('Complete/CreateDefaultValues',
                    );
    }

    public function analyze() {
        $this->atomIs('Methodcall', Analyzer::WITHOUT_CONSTANTS)
              ->_as('method')
              ->hasNoIn('DEFINITION')
              ->outIs('METHOD')
              ->atomIs('Methodcallname', Analyzer::WITHOUT_CONSTANTS)
              ->savePropertyAs('lccode', 'name')
              ->inIs('METHOD')
              ->outIs('OBJECT')
              ->inIs('DEFINITION')  // No check on atoms :
              ->atomIs(array('Variabledefinition', 'Parametername', 'Propertydefinition', 'Globaldefinition', 'Staticdefinition', 'Virtualproperty'), Analyzer::WITHOUT_CONSTANTS)
              ->outIs('DEFAULT')
              ->atomIs('New', Analyzer::WITHOUT_CONSTANTS)
              ->outIs('NEW')
              ->inIs('DEFINITION')
              ->atomIs('Class', Analyzer::WITHOUT_CONSTANTS)
              ->goToAllParentsTraits(Analyzer::INCLUDE_SELF)
              ->outIs('METHOD')
              ->outIs('NAME')
              ->samePropertyAs('lccode', 'name', Analyzer::CASE_INSENSITIVE)
              ->inIs('NAME')
              ->addETo('DEFINITION', 'method')
              ->back('first');
        $this->prepareQuery();

        $this->atomIs('Member', Analyzer::WITHOUT_CONSTANTS)
              ->_as('member')
              ->hasNoIn('DEFINITION')
              ->outIs('MEMBER')
              ->atomIs('Name', Analyzer::WITHOUT_CONSTANTS)
              ->savePropertyAs('code', 'name')
              ->inIs('MEMBER')
              ->outIs('OBJECT')
              ->inIs('DEFINITION')
              ->atomIs(array('Variabledefinition', 'Parametername', 'Propertydefinition', 'Globaldefinition', 'Staticdefinition', 'Virtualproperty'), Analyzer::WITHOUT_CONSTANTS)
              ->outIs('DEFAULT')
              ->atomIs('New', Analyzer::WITHOUT_CONSTANTS)
              ->outIs('NEW')
              ->inIs('DEFINITION')
              ->atomIs('Class', Analyzer::WITHOUT_CONSTANTS)
              ->goToAllParentsTraits(Analyzer::INCLUDE_SELF)
              ->outIs('PPP')
              ->outIs('PPP')
              ->samePropertyAs('propertyname', 'name', Analyzer::CASE_SENSITIVE)
              ->addETo('DEFINITION', 'member')
              ->back('first');
        $this->prepareQuery();
    }
}

?>
