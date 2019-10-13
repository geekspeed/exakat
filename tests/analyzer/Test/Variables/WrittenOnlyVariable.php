<?php

namespace Test\Variables;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class WrittenOnlyVariable extends Analyzer {
    /* 11 methods */

    public function testVariables_WrittenOnlyVariable01()  { $this->generic_test('Variables_WrittenOnlyVariable.01'); }
    public function testVariables_WrittenOnlyVariable02()  { $this->generic_test('Variables_WrittenOnlyVariable.02'); }
    public function testVariables_WrittenOnlyVariable03()  { $this->generic_test('Variables_WrittenOnlyVariable.03'); }
    public function testVariables_WrittenOnlyVariable04()  { $this->generic_test('Variables_WrittenOnlyVariable.04'); }
    public function testVariables_WrittenOnlyVariable05()  { $this->generic_test('Variables/WrittenOnlyVariable.05'); }
    public function testVariables_WrittenOnlyVariable06()  { $this->generic_test('Variables/WrittenOnlyVariable.06'); }
    public function testVariables_WrittenOnlyVariable07()  { $this->generic_test('Variables/WrittenOnlyVariable.07'); }
    public function testVariables_WrittenOnlyVariable08()  { $this->generic_test('Variables/WrittenOnlyVariable.08'); }
    public function testVariables_WrittenOnlyVariable09()  { $this->generic_test('Variables/WrittenOnlyVariable.09'); }
    public function testVariables_WrittenOnlyVariable10()  { $this->generic_test('Variables/WrittenOnlyVariable.10'); }
    public function testVariables_WrittenOnlyVariable11()  { $this->generic_test('Variables/WrittenOnlyVariable.11'); }
}
?>