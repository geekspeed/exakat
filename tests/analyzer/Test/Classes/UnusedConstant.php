<?php

namespace Test\Classes;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class UnusedConstant extends Analyzer {
    /* 1 methods */

    public function testClasses_UnusedConstant01()  { $this->generic_test('Classes/UnusedConstant.01'); }
}
?>