<?php

namespace Test\Classes;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class TooManyInjections extends Analyzer {
    /* 1 methods */

    public function testClasses_TooManyInjections01()  { $this->generic_test('Classes/TooManyInjections.01'); }
}
?>