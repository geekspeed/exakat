<?php

namespace Test\Performances;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class MbStringInLoop extends Analyzer {
    /* 1 methods */

    public function testPerformances_MbStringInLoop01()  { $this->generic_test('Performances/MbStringInLoop.01'); }
}
?>