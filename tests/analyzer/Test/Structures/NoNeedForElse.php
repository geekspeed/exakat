<?php

namespace Test\Structures;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class NoNeedForElse extends Analyzer {
    /* 1 methods */

    public function testStructures_NoNeedForElse01()  { $this->generic_test('Structures/NoNeedForElse.01'); }
}
?>