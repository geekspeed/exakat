<?php

namespace Test\Type;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class UdpDomains extends Analyzer {
    /* 1 methods */

    public function testType_UdpDomains01()  { $this->generic_test('Type/UdpDomains.01'); }
}
?>