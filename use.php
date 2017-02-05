<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//  PHP 5.6
use Framework\Component\ClassA;
use Framework\Component\ClassB as ClassC;
use Framework\Component\OtherComponent\ClassD;

//  PHP 7
use Framework\Component\{
     ClassA,
     ClassB as ClassC,
     OtherComponent\ClassD
};
use Framework\Component\{
     ClassA,
     function OtherComponent\someFunction,
     const OtherComponent\SOME_CONSTANT
};