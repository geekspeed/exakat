<?php

namespace Test\Php;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class DirectCallToClone extends Analyzer {
    /* 1 methods */

    public function testPhp_DirectCallToClone01()  { $this->generic_test('Php/DirectCallToClone.01'); }
}
?>