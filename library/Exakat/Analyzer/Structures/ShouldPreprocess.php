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


namespace Exakat\Analyzer\Structures;

use Exakat\Analyzer\Analyzer;

class ShouldPreprocess extends Analyzer {
    public function dependsOn() {
        return array('Constants/IsPhpConstant',
                    );
    }
    
    public function analyze() {
        $dynamicAtoms = array('Variable',
                              'Array',
                              'Member',
                              'Magicconstant',
                              'Staticmethodcall',
                              'Staticproperty',
                              'Methodcall',
                              );
        //'Functioncall' : if they also have only constants.
        
        $functionList = self::$methods->getDeterministFunctions();
        $functionList = makeFullNsPath($functionList);

        // Operator only working on constants
        $this->atomIs(array('Addition',
                            'Multiplication',
                            'Concatenation',
                            'Power',
                            'Bitshift',
                            'Logical',
                            'Not',
                            'Comparison',
                            ))
             ->hasNoInstruction('Constant')

            // Functioncall, that are not authorized
             ->noAtomWithoutPropertyInside('Functioncall', 'fullnspath', $functionList)
             ->noAnalyzerInside(array('Identifier', 'Nsname'), 'Constants/IsPhpConstant')

            // PHP Constants are not authorized
             ->noAtomInside($dynamicAtoms);
        $this->prepareQuery();

        $functionListNoArray = array_diff($functionList,
                array('\\defined',
                      '\\error_reporting',
                      '\\extension_loaded',
                      '\\get_defined_vars',
                      '\\print',
                      '\\echo',
                      '\\set_time_limit',
                      ));
        $functionListNoArray = array_values($functionListNoArray);

        // Function only applied to constants
        $this->atomFunctionIs($functionListNoArray)
             ->is('constant', true)
             ->back('first');
        $this->prepareQuery();

        // Concatenations of literals
        $this->atomIs('Assignation')
             ->codeIs(array('=', '.='), self::TRANSLATE, self::CASE_SENSITIVE)
             ->outIs('RIGHT')
             ->isLiteral()
             ->is('constant', true)
             ->back('first')
             ->outIs('LEFT')
             ->savePropertyAs('fullcode', 'variable')
             ->back('first')
             ->nextSibling('EXPRESSION')
             ->atomIs('Assignation')
             ->codeIs('.=', self::TRANSLATE, self::CASE_SENSITIVE)
             ->outIs('LEFT')
             ->samePropertyAs('fullcode', 'variable', self::CASE_SENSITIVE)
             ->inIs('LEFT')
             ->outIs('RIGHT')
             ->isLiteral()
             ->is('constant', true)
             ->back('first');
        $this->prepareQuery();
    }
}

?>
