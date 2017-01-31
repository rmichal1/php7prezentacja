<form action="../Kontroler/WypozyczRowerControler.php" method="post">
<table border="0" align="top" width="100%">
    <tr>
        <td style="vertical-align: top;">
            id: <input type="text" name="id" disabled="true" size="6" value=<?php echo $_POST['id']?> ><br>
            Imię: <input type="text" name="imie" required="true" size="6"><br>
            Nazwisko: <input type="text" name="nazwisko" required="true" size="6"><br>
            Telefon: <input type="text" name="telefon" required="true" size="6"><br>  
            Kod: <input type="text" name="kod" required="true"size="6">   
            Miasto: <input type="text" name="miasto" required="true"size="6"><br>
            Ulica:<input type="text" name="ulica" required="true"size="6">   
            Numer:<input type="text" name="numerUlicy"size="3"><br>
        </td>
        <td style="vertical-align: top;">
            wypożyczone rowery:<br>
            <input type="text" name="idRoweru" disabled="true" value=<?php echo $_POST['idRoweru']?>><br>
            Wypożycz: <?php echo $choice;?><!--<input type="text" name="wypożycz" equired="true"size="6">--><br>
            Typ dok: <input type="text" name="typDok" required="true"size="6"><br>  
            nr: <input type="text" name="nr" required="true"size="6"><br>  
           <?php// echo $_POST['nazwisko']?>
           <input type="submit" value="OK">
        </td>
    </tr>    
</table>
    
</form>