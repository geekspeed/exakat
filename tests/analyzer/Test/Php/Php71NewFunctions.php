<?php

namespace Test\Php;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class Php71NewFunctions extends Analyzer {
    /* 1 methods */

    public function testPhp_Php71NewFunctions01()  { $this->generic_test('Php/Php71NewFunctions.01'); }
}
?>