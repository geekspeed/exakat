<?php

namespace Test\Structures;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class MaxLevelOfIdentation extends Analyzer {
    /* 1 methods */

    public function testStructures_MaxLevelOfIdentation01()  { $this->generic_test('Structures/MaxLevelOfIdentation.01'); }
}
?>