<?php

$expected     = array('$c - $c',
                      '-$d + $e + $d',
                      '$d + $e - $d',
                      '-$c + $c',
                      '$c + $d - $e - $c',
                      '$d - $d + $e',
                      '-$d + $d + $e',
                      '-$c - $c',
                     );

$expected_not = array('$b[3] + $c6 + $d->foo(1,2,3) - $c6 + $b[3]',
                      '+$c + $c',
                      '$d + $e + $d',
                      '$b[3] - $c5 + $d->foo(1,2,3) + $c5 + $b[3]',
                     );

?>