<?php

namespace Test\Php;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class NoCastToInt extends Analyzer {
    /* 1 methods */

    public function testPhp_NoCastToInt01()  { $this->generic_test('Php/NoCastToInt.01'); }
}
?>