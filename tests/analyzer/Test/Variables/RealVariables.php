<?php

namespace Test\Variables;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class RealVariables extends Analyzer {
    /* 3 methods */

    public function testVariables_RealVariables01()  { $this->generic_test('Variables/RealVariables.01'); }
    public function testVariables_RealVariables02()  { $this->generic_test('Variables/RealVariables.02'); }
    public function testVariables_RealVariables03()  { $this->generic_test('Variables/RealVariables.03'); }
}
?>