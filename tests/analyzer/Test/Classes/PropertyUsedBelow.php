<?php

namespace Test\Classes;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class PropertyUsedBelow extends Analyzer {
    /* 1 methods */

    public function testClasses_PropertyUsedBelow01()  { $this->generic_test('Classes/PropertyUsedBelow.01'); }
}
?>