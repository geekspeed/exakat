<?php

namespace Test\Functions;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class OptionalParameter extends Analyzer {
    /* 1 methods */

    public function testFunctions_OptionalParameter01()  { $this->generic_test('Functions/OptionalParameter.01'); }
}
?>