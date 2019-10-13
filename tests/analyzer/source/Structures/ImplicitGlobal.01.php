<?php

global $explicitGlobalVar; // explicit global variable
$implicitGlobalVar; // naturally global var

function x () {
    global $explicitGlobalVar, $implicitGlobalVar;
    
}

function x2 () {
    global $explicitGlobalVar, $implicitGlobalVar;
}

?>