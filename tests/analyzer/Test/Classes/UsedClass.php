<?php

namespace Test\Classes;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class UsedClass extends Analyzer {
    /* 5 methods */

    public function testClasses_UsedClass01()  { $this->generic_test('Classes_UsedClass.01'); }
    public function testClasses_UsedClass02()  { $this->generic_test('Classes_UsedClass.02'); }
    public function testClasses_UsedClass03()  { $this->generic_test('Classes/UsedClass.03'); }
    public function testClasses_UsedClass04()  { $this->generic_test('Classes/UsedClass.04'); }
    public function testClasses_UsedClass05()  { $this->generic_test('Classes/UsedClass.05'); }
}
?>