<?php

$powersOfTwo = [1 => 2, 2 => 4, 3 => 8];
list(1 => $oneBit, 2 => $twoBit, 3 => $threeBit) = $powersOfTwo;

$powersOfTwo = [1 => 2, 2 => 4, 3 => 8];
list('a' => $oneBit, 'b' => $twoBit, 'c'.'d' => $threeBit) = $powersOfTwo;

$powersOfTwo = [1 => 2, 2 => 4, 3 => 8];
list($a, $b, $c) = $powersOfTwo;

?>