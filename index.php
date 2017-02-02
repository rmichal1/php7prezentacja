<?php
declare (strict_types=1);
function sumOld($a,$b){
    return $a+$b;
}

function sumNew(int $a, int $b) {
    return $a+$b;
}

echo "1: ".sumOld("10 abc",5)."<br>";
//echo "2: ".sumNew("10 abc",5)."<br>";
echo "3: ".sumNew(10,5)." <br>";
echo "4: ".sumNew("10",5)." <br>";
echo "5: ".sumOld("10",5)."<br>";