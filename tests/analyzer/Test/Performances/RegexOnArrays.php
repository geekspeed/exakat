<?php

namespace Test\Performances;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class RegexOnArrays extends Analyzer {
    /* 1 methods */

    public function testPerformances_RegexOnArrays01()  { $this->generic_test('Performances/RegexOnArrays.01'); }
}
?>