<?php

namespace Test\Namespaces;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class UseFunctionsConstants extends Analyzer {
    /* 1 methods */

    public function testNamespaces_UseFunctionsConstants01()  { $this->generic_test('Namespaces_UseFunctionsConstants.01'); }
}
?>