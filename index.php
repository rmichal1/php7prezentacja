<?php

declare (strict_types=1);// najwazniejsza deklaracja


function sumOld($a,$b){
    return $a+$b;
}

function sumNew(int $a, int $b): int {
    return $a+$b;
}

echo "1: ".sumOld("10 abc",5)."<br>";
echo "2: ".sumNew("10 abc",5)." 2 <br>";//error

echo "3: ".sumNew(10,5)." 3 <br>";
echo "4: ".sumNew("10",5)." 4 <br>";//error
echo "5: ".sumOld("10",5)." 5 <br>";