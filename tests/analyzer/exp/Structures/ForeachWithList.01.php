<?php

$expected     = array('foreach($array as $id2 => list($a2, $b2)) { /**/ } ',
                      'foreach($array as list($a1, $b1)) { /**/ } ',
                     );

$expected_not = array('foreach($array as $id3 => $a3) { /**/ } ',
                      'foreach($array as $a4) { /**/ } ',
                     );

?>