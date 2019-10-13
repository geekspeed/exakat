<?php

namespace Test\Functions;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class UnsetOnArguments extends Analyzer {
    /* 6 methods */

    public function testFunctions_UnsetOnArguments01()  { $this->generic_test('Functions_UnsetOnArguments.01'); }
    public function testFunctions_UnsetOnArguments02()  { $this->generic_test('Functions_UnsetOnArguments.02'); }
    public function testFunctions_UnsetOnArguments03()  { $this->generic_test('Functions_UnsetOnArguments.03'); }
    public function testFunctions_UnsetOnArguments04()  { $this->generic_test('Functions_UnsetOnArguments.04'); }
    public function testFunctions_UnsetOnArguments05()  { $this->generic_test('Functions/UnsetOnArguments.05'); }
    public function testFunctions_UnsetOnArguments06()  { $this->generic_test('Functions/UnsetOnArguments.06'); }
}
?>