<?php

namespace Test\Php;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class Php70NewClasses extends Analyzer {
    /* 1 methods */

    public function testPhp_Php70NewClasses01()  { $this->generic_test('Php/Php70NewClasses.01'); }
}
?>