<?php

$expected     = array('$b - $c + $c',
                      '-$b[6] + $c5 + $d->foo(1, 2, 3) - $b[6] - $c5',
                      '-$b[4] - $c5 + $d->foo(1, 2, 3) + $c5 - $b[4]',
                      '-$b[5] + $c5 + $d->foo(1, 2, 3) + $b[5] - $c5',
                     );

$expected_not = array('-$b[4] - $c5 + $d->foo(1,2,3) + $c5 - $b[4]',
                      '-$b[5] - $c5 + $d->foo(1,2,3) + $b[5] - $c5',
                      '-$b[6] - $c5 + $d->foo(1,2,3) - $b[6] - $c5',

                      '-$b[3] - $c5 + $d->foo(1, 2, 3) + $c5 + $b[3]', // false negative
                     );

?>