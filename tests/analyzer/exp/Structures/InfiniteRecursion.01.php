<?php

$expected     = array('function foo($a, $b) { /**/ } ',
                      'function foo6( ) { /**/ } ',
                     );

$expected_not = array('function foo2($a, $b) { /**/ } ',
                      'function foo3($a, $b) { /**/ } ',
                      'function foo4($a, $b) { /**/ } ',
                      'function foo5($a, $b) { /**/ } ',
                      'function foo7( ) { /**/ } ',
                     );

?>