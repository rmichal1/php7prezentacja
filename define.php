<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Works as of PHP 5.6
const ANIMALS1 = array('dog', 'cat', 'bird');
echo ANIMALS1[2]; // outputs "bird"

// Works as of PHP 7
define('ANIMALS', array('dog','cat','bird'));
echo ANIMALS[1]; // outputs "cat"
