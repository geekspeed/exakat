<?php

namespace Test\Arrays;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class MassCreation extends Analyzer {
    /* 1 methods */

    public function testArrays_MassCreation01()  { $this->generic_test('Arrays/MassCreation.01'); }
}
?>