<?php

namespace Test;

include_once(dirname(dirname(dirname(__DIR__))).'/library/Autoload.php');
spl_autoload_register('Autoload::autoload_test');
spl_autoload_register('Autoload::autoload_phpunit');

class _Trait extends Tokenizer {
    /* 15 methods */

    public function test_Trait01()  { $this->generic_test('_Trait.01'); }
    public function test_Trait02()  { $this->generic_test('_Trait.02'); }
    public function test_Trait03()  { $this->generic_test('_Trait.03'); }
    public function test_Trait04()  { $this->generic_test('_Trait.04'); }
    public function test_Trait05()  { $this->generic_test('_Trait.05'); }
    public function test_Trait06()  { $this->generic_test('_Trait.06'); }
    public function test_Trait07()  { $this->generic_test('_Trait.07'); }
    public function test_Trait08()  { $this->generic_test('_Trait.08'); }
    public function test_Trait09()  { $this->generic_test('_Trait.09'); }
    public function test_Trait10()  { $this->generic_test('_Trait.10'); }
    public function test_Trait11()  { $this->generic_test('_Trait.11'); }
    public function test_Trait12()  { $this->generic_test('_Trait.12'); }
    public function test_Trait13()  { $this->generic_test('_Trait.13'); }
    public function test_Trait14()  { $this->generic_test('_Trait.14'); }
    public function test_Trait15()  { $this->generic_test('_Trait.15'); }
}
?>