<?php

namespace Test\Classes;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class CouldBeStatic extends Analyzer {
    /* 4 methods */

    public function testClasses_CouldBeStatic01()  { $this->generic_test('Classes/CouldBeStatic.01'); }
    public function testClasses_CouldBeStatic02()  { $this->generic_test('Classes/CouldBeStatic.02'); }
    public function testClasses_CouldBeStatic03()  { $this->generic_test('Classes/CouldBeStatic.03'); }
    public function testClasses_CouldBeStatic04()  { $this->generic_test('Classes/CouldBeStatic.04'); }
}
?>