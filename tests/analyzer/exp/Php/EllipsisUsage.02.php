<?php

$expected     = array('...a::b( )',
                      '...a::b',
                      '...$a->b',
                      '...\\a',
                      '...$a',
                      '...a::$b',
                      '...$a->b( )',
                      '...a',
                      '...a( )',
                     );

$expected_not = array('...A::B( )',
                      '...A::B',
                      '...$A->B',
                      '...\\A',
                      '...$A',
                      '...A::$B',
                      '...$A->B( )',
                      '...A',
                      '...A( )',
                     );

?>