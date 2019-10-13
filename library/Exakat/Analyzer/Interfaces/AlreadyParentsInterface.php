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
namespace Exakat\Analyzer\Interfaces;

use Exakat\Analyzer\Analyzer;

class AlreadyParentsInterface extends Analyzer {
    public function analyze() {
        // Find classes which are implementing several times the same interface
        $this->atomIs(self::$CLASSES_ALL)
             ->outIs('IMPLEMENTS')
             ->savePropertyAs('fullnspath', 'i')
             ->inIs('IMPLEMENTS')
             ->goToAllImplements(self::EXCLUDE_SELF)
             ->outIs(array('IMPLEMENTS', 'EXTENDS'))
             ->samePropertyAs('fullnspath', 'i')
             ->back('first');
        $this->prepareQuery();
    }
}

?>
