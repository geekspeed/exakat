<?php

namespace Test\Classes;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class UsedProtectedMethod extends Analyzer {
    /* 10 methods */

    public function testClasses_UsedProtectedMethod01()  { $this->generic_test('Classes/UsedProtectedMethod.01'); }
    public function testClasses_UsedProtectedMethod02()  { $this->generic_test('Classes/UsedProtectedMethod.02'); }
    public function testClasses_UsedProtectedMethod03()  { $this->generic_test('Classes/UsedProtectedMethod.03'); }
    public function testClasses_UsedProtectedMethod04()  { $this->generic_test('Classes/UsedProtectedMethod.04'); }
    public function testClasses_UsedProtectedMethod05()  { $this->generic_test('Classes/UsedProtectedMethod.05'); }
    public function testClasses_UsedProtectedMethod06()  { $this->generic_test('Classes/UsedProtectedMethod.06'); }
    public function testClasses_UsedProtectedMethod07()  { $this->generic_test('Classes/UsedProtectedMethod.07'); }
    public function testClasses_UsedProtectedMethod08()  { $this->generic_test('Classes/UsedProtectedMethod.08'); }
    public function testClasses_UsedProtectedMethod09()  { $this->generic_test('Classes/UsedProtectedMethod.09'); }
    public function testClasses_UsedProtectedMethod10()  { $this->generic_test('Classes/UsedProtectedMethod.10'); }
}
?>