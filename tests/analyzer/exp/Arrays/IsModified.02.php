<?php

$expected     = array('$array7[7][8]',
                      '$array3[3]',
                      '$array1[1]',
                      '$array16[16][17][18]',
                      '$array13[13][14]',
                      '$array10[][10][11]',
                      '$array3[3][][4]',
                      '$array7[7]',
                     );

$expected_not = array('$variable[]',
                      '$array10',
                     );

?>