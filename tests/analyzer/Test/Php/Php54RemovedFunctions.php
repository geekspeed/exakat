<?php

namespace Test\Php;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class Php54RemovedFunctions extends Analyzer {
    /* 1 methods */

    public function testPhp_Php54RemovedFunctions01()  { $this->generic_test('Php/Php54RemovedFunctions.01'); }
}
?>