
<?php
include 'DatabaseConnector.php';
class Wypozycz{
    
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

$wszystkieRoweryFalse= "SELECT * FROM rowery WHERE \"wypozyczony\" = 'f' ORDER BY length(id_roweru),id_roweru;";
$dbconn1=new Wypozycz();
$odpowiedz = $dbconn1->run($wszystkieRoweryFalse);
$choice = "<select name='id_roweru' >";
 while ( $row = pg_fetch_assoc($odpowiedz) ) {
    $id_roweru=$row["id_roweru"];
     $choice .= "<option value='$id_roweru'";
     $choice .=">$id_roweru</option>";
 }
 $choice .= "</select>";



//$dbconn1=new Wypozycz();
//$dbconn1->setValue();
//$imie=$_POST['imie'];
//$_POST['nazwisko']="taku takasd kdas ";
include '../views/wypozyczRower.php';
// Wykonanie zapytania SQL
/*$query = "CREATE TABLE COMPANY(
   ID INT PRIMARY KEY     NOT NULL,
   NAME           TEXT    NOT NULL,
   AGE            INT     NOT NULL,
   ADDRESS        CHAR(50),
   SALARY         REAL
)";
$dbconn1=new Wypozycz();
$dbconn1->run($query);*/
?>

