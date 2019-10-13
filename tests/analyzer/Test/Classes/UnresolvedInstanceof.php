<?php

namespace Test\Classes;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class UnresolvedInstanceof extends Analyzer {
    /* 10 methods */

    public function testClasses_UnresolvedInstanceof01()  { $this->generic_test('Classes_UnresolvedInstanceof.01'); }
    public function testClasses_UnresolvedInstanceof02()  { $this->generic_test('Classes_UnresolvedInstanceof.02'); }
    public function testClasses_UnresolvedInstanceof03()  { $this->generic_test('Classes_UnresolvedInstanceof.03'); }
    public function testClasses_UnresolvedInstanceof04()  { $this->generic_test('Classes_UnresolvedInstanceof.04'); }
    public function testClasses_UnresolvedInstanceof05()  { $this->generic_test('Classes_UnresolvedInstanceof.05'); }
    public function testClasses_UnresolvedInstanceof06()  { $this->generic_test('Classes_UnresolvedInstanceof.06'); }
    public function testClasses_UnresolvedInstanceof07()  { $this->generic_test('Classes/UnresolvedInstanceof.07'); }
    public function testClasses_UnresolvedInstanceof08()  { $this->generic_test('Classes/UnresolvedInstanceof.08'); }
    public function testClasses_UnresolvedInstanceof09()  { $this->generic_test('Classes/UnresolvedInstanceof.09'); }
    public function testClasses_UnresolvedInstanceof10()  { $this->generic_test('Classes/UnresolvedInstanceof.10'); }
}
?>