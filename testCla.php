<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  
//declare(strict_types=1);

include  'ClassTest.php';


$userNew=new ClassTest;
$userNew->setName("Radek");
function setObject(ClassTest $object): ClassTest{
    $object->setLikeIt(false);
    $object->setInWollet(12.56);
    
    return $object;
}

$aaa=setObject($userNew);

var_dump($aaa);