<?php

namespace Test\Performances;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class FetchOneRowFormat extends Analyzer {
    /* 1 methods */

    public function testPerformances_FetchOneRowFormat01()  { $this->generic_test('Performances/FetchOneRowFormat.01'); }
}
?>