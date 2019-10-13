<?php

$string = implode( '', file($file1) );
$string = join( '', \file($file2) );

$string = explode( '', file($file3) );
$string = join( '', \file_get_contents($file4) );

$lines = file($file5);
echo implode('',$lines);

$lines2 = file($file6);
echo implode('',$lines3);

$lines4 = \file($file7);
echo implode('sb',$lines4);

?>
