<?php

namespace Test\Functions;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class UselessReturn extends Analyzer {
    /* 9 methods */

    public function testFunctions_UselessReturn01()  { $this->generic_test('Functions_UselessReturn.01'); }
    public function testFunctions_UselessReturn02()  { $this->generic_test('Functions_UselessReturn.02'); }
    public function testFunctions_UselessReturn03()  { $this->generic_test('Functions_UselessReturn.03'); }
    public function testFunctions_UselessReturn04()  { $this->generic_test('Functions_UselessReturn.04'); }
    public function testFunctions_UselessReturn05()  { $this->generic_test('Functions_UselessReturn.05'); }
    public function testFunctions_UselessReturn06()  { $this->generic_test('Functions_UselessReturn.06'); }
    public function testFunctions_UselessReturn07()  { $this->generic_test('Functions_UselessReturn.07'); }
    public function testFunctions_UselessReturn08()  { $this->generic_test('Functions/UselessReturn.08'); }
    public function testFunctions_UselessReturn09()  { $this->generic_test('Functions/UselessReturn.09'); }
}
?>