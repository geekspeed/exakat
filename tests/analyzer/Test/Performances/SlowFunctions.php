<?php

namespace Test\Performances;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class SlowFunctions extends Analyzer {
    /* 1 methods */

    public function testPerformances_SlowFunctions01()  { $this->generic_test('Performances_SlowFunctions.01'); }
}
?>