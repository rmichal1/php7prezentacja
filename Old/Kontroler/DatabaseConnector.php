<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connect
 *
 * Połączenie i wysłanie zapytania do bazy danych.
 * 
 * @author Kasia
 */
class DatabaseConnector {
    //put your code here
    private $config;
    private $dbconn;
    
    //pobranie danych z pliku 
   function __construct()
   {
       $this->config = parse_ini_file('../../config.ini');
   }
   // Nawiązanie połączenia, wybór bazy danych
   function connectWithDB(){
            $this->dbconn = pg_connect("host=localhost dbname=".$this->config['dbname']." user=".$this->config['username']." password=".$this->config['password'])
                or die('Nie można nawiązać połączenia: ' . pg_last_error());          

   }
   
   public function wyslijZapytanie($query){
      $this->connectWithDB();  
      $result =  pg_query($this->dbconn,$query) or die('Nieprawidłowe zapytanie: ' . pg_last_error());
      
      //pg_free_result($result);
      $this->zamknieciePolaczenia();
      return $result;
   }
   public function zamknieciePolaczenia(){
       // Zamknięcie połączenia
       if($this->dbconn!=null){
            pg_close($this->dbconn);
       }
   }
}
