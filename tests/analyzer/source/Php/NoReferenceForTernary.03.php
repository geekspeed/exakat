<?php

$a = 1;
$b = &$a;

$c = 1 ? $b : 2;
$c = 1 ? $a : 2;
$c = 1 ? 3 : $b;
$c = 1 ? $b : $b;


?>