<?php

namespace Test\Arrays;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class SliceFirst extends Analyzer {
    /* 1 methods */

    public function testArrays_SliceFirst01()  { $this->generic_test('Arrays/SliceFirst.01'); }
}
?>