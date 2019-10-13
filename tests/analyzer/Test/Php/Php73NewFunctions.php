<?php

namespace Test\Php;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class Php73NewFunctions extends Analyzer {
    /* 3 methods */

    public function testPhp_Php73NewFunctions01()  { $this->generic_test('Php/Php73NewFunctions.01'); }
    public function testPhp_Php73NewFunctions02()  { $this->generic_test('Php/Php73NewFunctions.02'); }
    public function testPhp_Php73NewFunctions03()  { $this->generic_test('Php/Php73NewFunctions.03'); }
}
?>