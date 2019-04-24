<?php

namespace Test\Security;

use Test\Analyzer;

include_once dirname(__DIR__, 2).'/Test/Analyzer.php';

class ShouldUsePreparedStatement extends Analyzer {
    /* 2 methods */

    public function testSecurity_ShouldUsePreparedStatement01()  { $this->generic_test('Security_ShouldUsePreparedStatement.01'); }
    public function testSecurity_ShouldUsePreparedStatement02()  { $this->generic_test('Security_ShouldUsePreparedStatement.02'); }
}
?>