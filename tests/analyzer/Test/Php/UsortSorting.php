<?php

namespace Test\Php;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class UsortSorting extends Analyzer {
    /* 1 methods */

    public function testPhp_UsortSorting01()  { $this->generic_test('Php/UsortSorting.01'); }
}
?>