<?php

namespace Test\Structures;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class ArrayMergeWithEllipsis extends Analyzer {
    /* 1 methods */

    public function testStructures_ArrayMergeWithEllipsis01()  { $this->generic_test('Structures/ArrayMergeWithEllipsis.01'); }
}
?>