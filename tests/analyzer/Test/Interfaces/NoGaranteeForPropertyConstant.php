<?php

namespace Test\Interfaces;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class NoGaranteeForPropertyConstant extends Analyzer {
    /* 1 methods */

    public function testInterfaces_NoGaranteeForPropertyConstant01()  { $this->generic_test('Interfaces/NoGaranteeForPropertyConstant.01'); }
}
?>