<?php

namespace Test\Variables;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class LostReferences extends Analyzer {
    /* 1 methods */

    public function testVariables_LostReferences01()  { $this->generic_test('Variables_LostReferences.01'); }
}
?>