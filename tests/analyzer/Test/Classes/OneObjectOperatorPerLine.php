<?php

namespace Test\Classes;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class OneObjectOperatorPerLine extends Analyzer {
    /* 1 methods */

    public function testClasses_OneObjectOperatorPerLine01()  { $this->generic_test('Classes_OneObjectOperatorPerLine.01'); }
}
?>