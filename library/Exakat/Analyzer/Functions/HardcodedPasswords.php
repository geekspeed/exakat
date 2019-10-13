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


namespace Exakat\Analyzer\Functions;

use Exakat\Analyzer\Analyzer;

class HardcodedPasswords extends Analyzer {
    public function dependsOn() {
        return array('Complete/PropagateConstants',
                    );
    }

    public function analyze() {
        // Position is 0 based
        $passwordsFunctions = $this->loadJson('php_logins.json');

        $functions = (array) $passwordsFunctions->functions;
        $positions = array_groupby( $functions);

        foreach($positions as $position => $function) {
            $function = makeFullNsPath($function);
            $this->atomFunctionIs($function)
                 ->outWithRank('ARGUMENT', $position)
                 ->atomIs(array('String', 'Heredoc', 'Concatenation'), self::WITH_CONSTANTS)
                 ->back('first');
            $this->prepareQuery();
        }

        $passwordsKeys = $this->loadJson('password_keys.json','passwords');
        // ['password' => 1];
        $this->atomIs('Arrayliteral')
             ->outIs('ARGUMENT')
             ->atomIs('Keyvalue')
             ->_as('value')
             ->outIs('INDEX')
             ->atomIs(array('String', 'Heredoc', 'Concatenation'), self::WITH_CONSTANTS)
             ->has('noDelimiter')
             ->noDelimiterIs($passwordsKeys, self::CASE_SENSITIVE)
             ->back('value')
             ->outIs('VALUE')
             ->atomIs(array('String', 'Heredoc', 'Concatenation'), self::WITH_CONSTANTS)
             ->regexIsNot('code', '/required/')
             ->back('first');
        $this->prepareQuery();

        // $a->password = 'abc';
        $this->atomIs('Member')
             ->hasIn('LEFT')
             ->outIs('MEMBER')
             ->codeIs($passwordsKeys)
             ->back('first')
             ->outIs('OBJECT')
             ->atomIs(array('This', 'Variableobject'))
             ->back('first')
             ->inIs('LEFT')
             ->atomIs('Assignation')
             ->outIs('RIGHT')
             ->atomIs(array('String', 'Heredoc', 'Concatenation'), self::WITH_CONSTANTS)
             ->regexIsNot('code', '/required/')
             ->back('first');
        $this->prepareQuery();
    }
}

?>
