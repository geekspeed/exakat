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

namespace Exakat\Reports;

use Exakat\Analyzer\Analyzer;
use Exakat\Data\Methods;
use Exakat\Exakat;
use Exakat\Phpexec;
use Exakat\Reports\Reports;

class Migration73 extends Ambassador {
    const FILE_FILENAME  = 'migration73';
    const FILE_EXTENSION = '';
    const CONFIG_YAML    = 'Migration73';
    
    private $analyzerList = array();
    private $theme = 'CompatibilityPHP73';

    public function dependsOnAnalysis() {
        return array('CompatibilityPHP73',
                     );
    }

    public function __construct($config) {
        parent::__construct($config);
    }
}
?>