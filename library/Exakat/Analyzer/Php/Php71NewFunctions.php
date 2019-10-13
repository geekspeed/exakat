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


namespace Exakat\Analyzer\Php;

use Exakat\Analyzer\Analyzer;
use Exakat\Analyzer\Common\FunctionDefinition;

class Php71NewFunctions extends FunctionDefinition {
    public function analyze() {
        $this->functions = array(
'curl_share_strerror',
'curl_multi_errno',
'curl_share_errno',
'mb_ord',
'mb_chr',
'mb_scrub',
'is_iterable',
'pcntl_async_signals',
'pcntl_signal_get_handler',
'sapi_windows_cp_get',
'sapi_windows_cp_set',
'sapi_windows_cp_conv',
'sapi_windows_cp_is_utf8',
'session_create_id',
'session_gc',
    );
        parent::analyze();
    }
}

?>
