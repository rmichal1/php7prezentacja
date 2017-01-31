<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ZwrotClass
 *
 * @author Kasia
 */
include 'DatabaseConnector.php';
class ZwrotClass {
    //put your code here
    
     private $dbconn;
    
    function __construct() {
        
        $this->dbconn=new DatabaseConnector();

    }
    
    public function run($query){
       return $this->dbconn->wyslijZapytanie($query);
    }
    
    public function setValue(){
        //$_POST['id']="1111";
    }
    
}
$wszystkieRoweryTrue= "SELECT * FROM rowery WHERE \"wypozyczony\" = 't' ORDER BY length(id_roweru), id_roweru;";
$zwrocRower="UPDATE rowery SET \"wypozyczony\" = 'f' WHERE \"id_roweru\"='".$_POST['id_roweru']."';";
$dbconn1=new ZwrotClass();
if($_POST['zwroc']){
    $odpowiedz = $dbconn1->run($zwrocRower);
   // echo "Rower ". $_POST['id_roweru'] ." został zwrócony";
}
$odpowiedz = $dbconn1->run($wszystkieRoweryTrue);
$choice = "<select name='id_roweru' >";
$selected=$_POST['id_roweru'];
 while ( $row = pg_fetch_assoc($odpowiedz) ) {
    $id_roweru=$row["id_roweru"];
     $choice .= "<option value='$id_roweru'";
    if($selected == $id_roweru){
       $choice .="selected";
    } else {      
    }
     $choice .=">$id_roweru</option>";
 }
 $choice .= "</select>";



include '../views/zwrot.php';

