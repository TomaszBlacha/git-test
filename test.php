<?php
include 'func.php';

function test ($int){
    $retval = $int*$int;
    return $retval;
}

echo test(4);
echo Testing\test2(4);