<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClassTest
 *
 * @author rad
 */

declare(strict_types=1);

class ClassTest {
    
    private $name;
    private $age;
    private $likeIt;
    private $cashInYourWallet;
    
    public function __construct() {
        $this->name="Adam";
        $this->age=22;
        $this->likeIt=true;
        $this->cashInYourWallet=3456.46;
    }
    
    public function setName(String $param){
        $this->name=$param;
    }
    public function getName():String {
        return $this->name;
    }
    
    public function setAge(int $param){
        $this->age=$param;
    }
    public function getAge():int{
        return $this->age;
    }
    public function setLikeIt(bool $param){
        $this->likeIt=$param;
    }
    public function getLikeIt(): bool{
        return $this->likeIt;
    }
    public function setInWallet(float $param){
        $this->cashInYourWallet=$param;
    }
    public function getInWallet():float{
        return $this->cashInYourWallet;
    }
}
