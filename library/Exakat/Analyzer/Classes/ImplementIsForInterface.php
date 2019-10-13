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

class ImplementIsForInterface extends Analyzer {
    public function dependsOn() {
        return array('Classes/IsExtClass',
                     'Composer/IsComposerClass',
                    );
    }
    
    public function analyze() {
        $this->atomIs(array('Class', 'Trait'))
             ->values('fullnspath')
             ->unique();
        $classesTraits = $this->rawQuery()->toArray();

        $this->atomIs('Interfaces')
             ->values('fullnspath')
             ->unique();
        $interfaces = $this->rawQuery()->toArray();
        
        $notValid = array_diff($classesTraits, $interfaces);

        // class a with implements
        $this->atomIs(self::$CLASSES_ALL)
             ->outIs('IMPLEMENTS')
             ->fullnspathIs($notValid)
             ->back('first');
        $this->prepareQuery();

        // class a implements a PHP class
        $this->atomIs(self::$CLASSES_ALL)
             ->outIs('IMPLEMENTS')
             ->analyzerIs('Classes/IsExtClass')
             ->back('first');
        $this->prepareQuery();

        // class a implements a PHP class
        $this->atomIs(self::$CLASSES_ALL)
             ->outIs('IMPLEMENTS')
             ->analyzerIs('Composer/IsComposerClass')
             ->back('first');
        $this->prepareQuery();
    }
}

?>
