<?php

$expected     = array('function foo70andmore(bool $b, array $a) { /**/ } ',
                      'function foo71andmore(iterable $i, bool $b, array $a) { /**/ } ',
                      'function foo72andmore(object $o, iterable $i, bool $b, array $a) { /**/ } ',
                     );

$expected_not = array('function foo56andless(array $a) { /**/ } ',
                     );

?>