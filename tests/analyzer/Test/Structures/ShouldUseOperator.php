<?php

namespace Test\Structures;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class ShouldUseOperator extends Analyzer {
    /* 3 methods */

    public function testStructures_ShouldUseOperator01()  { $this->generic_test('Structures/ShouldUseOperator.01'); }
    public function testStructures_ShouldUseOperator02()  { $this->generic_test('Structures/ShouldUseOperator.02'); }
    public function testStructures_ShouldUseOperator03()  { $this->generic_test('Structures/ShouldUseOperator.03'); }
}
?>