<?php

namespace Test\Classes;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class DisconnectedClasses extends Analyzer {
    /* 1 methods */

    public function testClasses_DisconnectedClasses01()  { $this->generic_test('Classes/DisconnectedClasses.01'); }
}
?>