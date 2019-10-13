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

namespace Exakat\Analyzer\Modules;

use Exakat\Analyzer\Analyzer;

class IncomingData extends Analyzer {
    protected $incoming = array();

    public function analyze() {
        $this->incoming = $this->loadJson('incoming_data.json');

        if (empty($this->incoming)) {
            return;
        }
        
        if (isset($this->incoming->staticmethods)) {
            $staticmethods = array();
            foreach((array) $this->incoming->staticmethods as $method) {
                list($class, $name) = explode('::', $method);
                array_collect_by($staticmethods, makeFUllnspath($class), $name);
            }

            $this->atomIs('Staticmethodcall')
                 ->outIs('CLASS')
                 ->fullnspathIs(array_keys($staticmethods))
                 ->savePropertyAs('fullnspath', 'fqn')
                 ->back('first')
                 ->outIs('METHOD')
                 ->outIs('NAME')
                 ->isHash('fullcode', $staticmethods, 'fqn')
                 ->back('first');
            $this->prepareQuery();
        }
    }
}

?>
