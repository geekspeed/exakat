<?php

namespace Test\Php;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class oldAutoloadUsage extends Analyzer {
    /* 1 methods */

    public function testPhp_oldAutoloadUsage01()  { $this->generic_test('Php/oldAutoloadUsage.01'); }
}
?>