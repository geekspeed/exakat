<?php

namespace Test\Php;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class Php55NewFunctions extends Analyzer {
    /* 1 methods */

    public function testPhp_Php55NewFunctions01()  { $this->generic_test('Php/Php55NewFunctions.01'); }
}
?>