<?php

namespace Test\Complete;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class PropagateConstants extends Analyzer {
    /* 1 methods */

    public function testComplete_PropagateConstants01()  { $this->generic_test('Complete/PropagateConstants.01'); }
}
?>