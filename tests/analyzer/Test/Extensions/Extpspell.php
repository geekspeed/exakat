<?php

namespace Test\Extensions;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class Extpspell extends Analyzer {
    /* 1 methods */

    public function testExtensions_Extpspell01()  { $this->generic_test('Extensions_Extpspell.01'); }
}
?>