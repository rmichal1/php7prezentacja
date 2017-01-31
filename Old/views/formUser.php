<table border="0" align="top" width="100%">
    <tr>
        <td style="vertical-align: top;">
            Nowy Klient:<br><br>
            <form action="../Kontroler/CreateUserClass.php" method="post">
                Imię: <input type="text" name="imie" required="true"><br>
                Nazwisko: <input type="text" name="nazwisko"required="true"><br>
                Kod: <input type="text" name="kod" required="true"><br>
                Miasto: <input type="text" name="miasto" required="true"><br>
                Ulica:<input type="text" name="ulica" required="true"><br>
                Numer:<input type="text" name="numerUlicy"><br>
                Telefon: <input type="tel" name="telefon" required="true"><br>  
                Typ Dok: <input type="text" name="typ_dok" required="true"><br>
                Nr Dok: <input type="text" name="nr_dok"><br> 
                <input type="submit" value="OK">
            </form>
        </td>
        <td style="vertical-align: top;">
            <form action="../Kontroler/FindUserClass.php" method="post" >
                Wyszukaj Klienta:    <input type="submit" value="Szukaj"><br><br>
            
                Imię: <input type="text" name="imie"><br>
                Nazwisko: <input type="text" name="nazwisko"><br>
                Miasto: <input type="text" name="miasto"><br>
                Telefon: <input type="text" name="telefon"><br>  
               
            </form>
            <?php
           
            ?>
        </td>
    </tr>    
</table>

