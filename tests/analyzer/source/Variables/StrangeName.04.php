<?php

    function foo($deeefault = 90.00, &$reeeference) {
        echo $deeefault;
        echo $reeeference;
    }
    function bar(A $tyyypehint) {
        echo $tyyypehint;
    }
    
    $aaa = 1;
    $aAa = 1; // This is OK
    $aab = 2;
    $abc = 3;

?>