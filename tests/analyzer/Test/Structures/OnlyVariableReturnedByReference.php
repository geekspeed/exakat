<?php

namespace Test\Structures;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class OnlyVariableReturnedByReference extends Analyzer {
    /* 1 methods */

    public function testStructures_OnlyVariableReturnedByReference01()  { $this->generic_test('Structures/OnlyVariableReturnedByReference.01'); }
}
?>