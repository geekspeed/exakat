<?php

namespace Test\Performances;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class NoConcatInLoop extends Analyzer {
    /* 3 methods */

    public function testPerformances_NoConcatInLoop01()  { $this->generic_test('Performances/NoConcatInLoop.01'); }
    public function testPerformances_NoConcatInLoop02()  { $this->generic_test('Performances/NoConcatInLoop.02'); }
    public function testPerformances_NoConcatInLoop03()  { $this->generic_test('Performances/NoConcatInLoop.03'); }
}
?>