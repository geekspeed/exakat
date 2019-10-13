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


namespace Exakat\Analyzer\Constants;

use Exakat\Analyzer\Analyzer;

class IsExtConstant extends Analyzer {

    public function dependsOn() {
        return array('Constants/ConstantUsage',
                     'Constants/IsGlobalConstant',
                    );
    }
    
    public function analyze() {
        $exts = $this->rulesets->listAllAnalyzer('Extensions');
        $exts[] = 'php_constants';
        
        $constants = array();
        foreach($exts as $ext) {
            $inifile = str_replace('Extensions\Ext', '', $ext) . '.ini';
            $ini = $this->loadIni($inifile);
            
            if (!empty($ini['constants'][0])) {
                $constants[] = $ini['constants'];
            }
        }

        if (empty($constants)) {
            // This won't happen, unless the above reading has failed
            return;
        }
        $constants = array_merge(...$constants);
        $constantsFullNs = makeFullNsPath($constants, true);
        
        // based on fullnspath
        $this->analyzerIs('Constants/ConstantUsage')
             ->atomIsNot(array('Boolean', 'Null', 'String'))
             ->fullnspathIs($constantsFullNs);
        $this->prepareQuery();

        $this->analyzerIs('Constants/ConstantUsage')
             ->analyzerIs('Constants/IsGlobalConstant')
             ->fullnspathIs($constantsFullNs);
        $this->prepareQuery();
    }
}

?>
