<?php

namespace Test\Classes;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class DemeterLaw extends Analyzer {
    /* 1 methods */

    public function testClasses_DemeterLaw01()  { $this->generic_test('Classes/DemeterLaw.01'); }
}
?>