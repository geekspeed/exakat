<?php

namespace Test\Variables;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class SelfTransform extends Analyzer {
    /* 1 methods */

    public function testVariables_SelfTransform01()  { $this->generic_test('Variables/SelfTransform.01'); }
}
?>