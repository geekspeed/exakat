<?php

namespace Test\Structures;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class Fallthrough extends Analyzer {
    /* 4 methods */

    public function testStructures_Fallthrough01()  { $this->generic_test('Structures/Fallthrough.01'); }
    public function testStructures_Fallthrough02()  { $this->generic_test('Structures/Fallthrough.02'); }
    public function testStructures_Fallthrough03()  { $this->generic_test('Structures/Fallthrough.03'); }
    public function testStructures_Fallthrough04()  { $this->generic_test('Structures/Fallthrough.04'); }
}
?>