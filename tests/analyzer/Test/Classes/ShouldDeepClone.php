<?php

namespace Test\Classes;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class ShouldDeepClone extends Analyzer {
    /* 1 methods */

    public function testClasses_ShouldDeepClone01()  { $this->generic_test('Classes/ShouldDeepClone.01'); }
}
?>