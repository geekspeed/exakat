<?php
    $c = 1;
    $b['B1'] = 2;
    $y = "$b[B]zC";
    $z = "{$b[B]}C";
    $a = "{$b[1 + function(){} + "B{$c}"]}C";
    $a2 = "{$b["B{$c}"]}C";
    $a2 = "{$b["B{$c}"]}C{$b1["B1{$c1}"]}C1";
    $a2 = "{$b["B{$c}"]}C{$b1["B1{$c1}"]}C1{$b2["B2{$c2}"]}C2{$b3["B3{$c3}"]}C3{$b4["B4{$c4}"]}C4{$b5["B5{$c5}"]}C5";


// three level deep : no go
//    $a2 = "{$b2["B2{$c2[1 + log("D1{$e1}")]}"]}C2";

?>