<?php

//declare (strict_types=1);// najwazniejsza deklaracja


function sumOld($a,$b){
    return $a+$b;
}

function sumNew(int $a, int $b): int {
    return $a+$b;
}

echo sumOld("10 abc",5)." 1 <br>";
echo sumNew("10 abc",5)." 2 <br>";//error

echo sumNew(10,5)." 3 <br>";
echo sumNew("10",5)." 4 <br>";//error
echo sumOld("10",5)." 5 <br>";