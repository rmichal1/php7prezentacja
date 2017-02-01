<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//php 5.6
function sortOld($a,$b){
    return ($a < $b) ? -1 : (($a>$b) ? 1 : 0);
}

//php 7
function sortNew($a, $b){
    return $a <=> $b ;    
}


echo "Wynik to: ".sortNew(6,7);