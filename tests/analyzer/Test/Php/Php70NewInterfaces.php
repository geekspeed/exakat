<?php

namespace Test\Php;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class Php70NewInterfaces extends Analyzer {
    /* 1 methods */

    public function testPhp_Php70NewInterfaces01()  { $this->generic_test('Php/Php70NewInterfaces.01'); }
}
?>