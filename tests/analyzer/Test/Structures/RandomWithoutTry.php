<?php

namespace Test\Structures;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class RandomWithoutTry extends Analyzer {
    /* 2 methods */

    public function testStructures_RandomWithoutTry01()  { $this->generic_test('Structures/RandomWithoutTry.01'); }
    public function testStructures_RandomWithoutTry02()  { $this->generic_test('Structures/RandomWithoutTry.02'); }
}
?>