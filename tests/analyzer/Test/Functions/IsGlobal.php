<?php

namespace Test\Functions;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class IsGlobal extends Analyzer {
    /* 1 methods */

    public function testFunctions_IsGlobal01()  { $this->generic_test('Functions_IsGlobal.01'); }
}
?>