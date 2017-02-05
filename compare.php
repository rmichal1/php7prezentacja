<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Integers
echo (1 <=> 1) ."<br>"; // 0
echo (1 <=> 2) ."<br>"; // -1
echo (2 <=> 1) ."<br>"; // 1

// Floats
echo (1.5 <=> 1.5) ."<br>"; // 0
echo (1.5 <=> 2.5) ."<br>"; // -1
echo (2.5 <=> 1.5) ."<br>"; // 1
 
// Strings
echo ("a" <=> "a") ."<br>"; // 0
echo ("a" <=> "b") ."<br>"; // -1
echo ("b" <=> "a") ."<br>"; // 1