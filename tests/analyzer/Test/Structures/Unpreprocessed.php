<?php

namespace Test\Structures;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class Unpreprocessed extends Analyzer {
    /* 4 methods */

    public function testStructures_Unpreprocessed01()  { $this->generic_test('Structures_Unpreprocessed.01'); }
    public function testStructures_Unpreprocessed02()  { $this->generic_test('Structures/Unpreprocessed.02'); }
    public function testStructures_Unpreprocessed03()  { $this->generic_test('Structures/Unpreprocessed.03'); }
    public function testStructures_Unpreprocessed04()  { $this->generic_test('Structures/Unpreprocessed.04'); }
}
?>