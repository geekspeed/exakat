<?php

namespace Test\Classes;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class IsInterfaceMethod extends Analyzer {
    /* 5 methods */

    public function testClasses_IsInterfaceMethod01()  { $this->generic_test('Classes_IsInterfaceMethod.01'); }
    public function testClasses_IsInterfaceMethod02()  { $this->generic_test('Classes_IsInterfaceMethod.02'); }
    public function testClasses_IsInterfaceMethod03()  { $this->generic_test('Classes_IsInterfaceMethod.03'); }
    public function testClasses_IsInterfaceMethod04()  { $this->generic_test('Classes/IsInterfaceMethod.04'); }
    public function testClasses_IsInterfaceMethod05()  { $this->generic_test('Classes/IsInterfaceMethod.05'); }
}
?>