<?php

namespace Test\Php;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class ShellFavorite extends Analyzer {
    /* 2 methods */

    public function testPhp_ShellFavorite01()  { $this->generic_test('Php/ShellFavorite.01'); }
    public function testPhp_ShellFavorite02()  { $this->generic_test('Php/ShellFavorite.02'); }
}
?>