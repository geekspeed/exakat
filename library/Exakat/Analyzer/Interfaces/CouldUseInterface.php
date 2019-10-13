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

class CouldUseInterface extends Analyzer {
    // interface i { function i(); }
    // class x { function i() {}}
    // class x could use interface i but it was forgotten

    public function analyze() {
        // Custom interfaces
        $this->atomIs('Interface')
             ->_as('name')
             ->outIs(array('METHOD', 'MAGICMETHOD'))
             ->_as(array('methodCount', 'static'))
             ->outIs('NAME')
             ->_as('method')
             ->select(array('name'        => 'fullnspath',
                            'method'      => 'lccode',
                            'methodCount' => 'count',
                            'static'      => 'fullcode',
                            ));
        $res = $this->rawQuery();

        $interfaces = array();
        $methodNames = array();
        foreach($res->toArray() as $row) {
            $row['static'] = preg_match('/^.*static.*function /i', $row['static']) === 0 ? '' : 'static';
            array_collect_by($interfaces, $row['name'], "$row[method]-$row[methodCount]-$row[static]");
            $methodNames[$row['method']] = 1;
        }

        $phpInterfaces = $this->loadJson('php_interfaces_methods.json');
        foreach($phpInterfaces as $interface => $methods) {
            $translations = $this->dictCode->translate(array_column($methods, 'name'));
            if (count($methods) !== count($translations)) {
                continue;
            }
            
            // translations are in the same order than original
            foreach($methods as $id => $method) {
                $interfaces[$interface][] = $translations[$id] . "-$method->count-";
                $methodNames[$translations[$id]] = 1;
            }
        }

        $methodNames = array_keys($methodNames);

        $this->atomIs(self::$CLASSES_ALL)
             ->filter(
                $this->side()
                     ->outIs(array('METHOD', 'MAGICMETHOD'))
                     ->isNot('visibility', array('private', 'protected'))
                     ->outIs('NAME')
                     ->is('lccode', $methodNames)
             )
             ->raw('sideEffect{ x = []; }')
             // Collect methods names with argument count
             // can one implement an interface, but with wrong argument counts ?
             ->raw(<<<'GREMLIN'
where( 
    __.out("METHOD", "MAGICMETHOD")
      .sideEffect{ 
        if (it.get().properties("static").any()) { 
            s = 'static';
        } else {
            s = '';
        }
        x.add(it.get().vertices(OUT, "NAME").next().value("lccode") + "-" + it.get().value("count") + "-" + s) ; 
       }
      .fold() 
)
GREMLIN
)
             ->raw('sideEffect{ php_interfaces = *** }', $interfaces)
             ->raw(<<<'GREMLIN'
filter{
    a = false;
    php_interfaces.each{ n, e ->
        if (x.intersect(e) == e) {
            a = true;
            fnp = n;
        }
    }
    
    a;
}

GREMLIN
)

                ->collectImplements('interfaces')
                ->raw('filter{ !(fnp in interfaces) }')
                ->back('first');
        $this->prepareQuery();
    }
}

?>
