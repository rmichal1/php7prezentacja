<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function call_method($obj) {
    $obj->method();
}
 
//call_method(null); // oops!

try {
    call_method(null); // oops!
} catch (Throwable $e) {
    echo "Exception: {$e->getMessage()}\n";
}