<?php

namespace Test\Structures;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class ShouldUseMath extends Analyzer {
    /* 1 methods */

    public function testStructures_ShouldUseMath01()  { $this->generic_test('Structures/ShouldUseMath.01'); }
}
?>