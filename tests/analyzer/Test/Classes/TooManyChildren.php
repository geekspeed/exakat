<?php

namespace Test\Classes;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class TooManyChildren extends Analyzer {
    /* 3 methods */

    public function testClasses_TooManyChildren01()  { $this->generic_test('Classes_TooManyChildren.01'); }
    public function testClasses_TooManyChildren02()  { $this->generic_test('Classes_TooManyChildren.02'); }
    public function testClasses_TooManyChildren03()  { $this->generic_test('Classes/TooManyChildren.03'); }
}
?>