<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
       <head>
              <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title>Zwrot</title>
    </head>
    <body>
        <table border="1" align="center">
                <tr>
                    <td width="20%" align="center"onclick="window.location.href='http://127.0.0.1/views/findCreateUser.php'" >Wypożycz rower</td>
                    <td width="20%" align="center" style="background-color: greenyellow">Zwrot</td>
                    <td width="20%" align="center">Podsumowanie dnia</td>
                </tr>
                <tr >
                    <td colspan="3" align="center">
                        <?php include 'formZwrot.php';?> 
                    
                <?php if($_POST['id_roweru'] && !$_POST['zwroc']){ ?>
                        <br><br>
                    <form action="../Kontroler/ZwrotClass.php" method="post" style="vertical-align: central">
                        <input type="hidden"  name="id_roweru" value="<?php echo $_POST['id_roweru']?>"> <br>  
                        Imię: <br>
                        Nazwisko: <br>
                        Cena: <br>
                    
                    <input type="submit" name="zwroc" value="Zwróć">

                </form>
                <?php } else if($_POST['zwroc']){ ?>
                    <br><br>
                    <?php  echo "Rower ". $_POST['id_roweru'] ." został zwrócony";
                    
                }?><br><br>
                    </td>
                </tr>
            </table>
    </body>
</html>
