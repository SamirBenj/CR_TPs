<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TP MEDIATHEQUE/style.css" rel="stylesheet">

    <title>Suppression d'un Abonne </title>
</head>
<body >
    <h2>Suppression d'un Abonne</h2>
    
    <div class="middle">

        <form action="" method="POST">
            <td>Numero d'Abonne</td>
            <input type="text" name="aboNum">

           

            <br></br>
            <input type="submit" value="Supprimer" name="submit"></input>
            <input type="submit" value="Effacer" name="erase"></input>

        </form>
        <br>
        <a href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TP MEDIATHEQUE/" style="color : inherit;">Retour au menu</a>

    </div>
        <?php

$con = mysqli_connect('localhost', 'root', 'toor');

if(!$con) {
    echo 'Not connected to database';
}

if(!mysqli_select_db($con, 'Mediatheque')) 
{
    echo 'Database Not selected';
}


$aboNum = isset($_POST['aboNum']) ? $_POST['aboNum'] : '';



    if(isset($_POST['submit'])) {

        if((empty($aboNum))) {
            echo '<b>Inserer la/les valeur(s)';
        
        }else{

            $sql = "DELETE FROM ABONNE WHERE aboNum = '$aboNum' ";

            if(!mysqli_query($con,$sql)) {
                echo '<b>Un abonne n a pas etait supprimer<b>';
            }else
                {
                    echo '<b>Un abonne est supprimer<b>';
                }
    
            }
        }

if(isset($_POST['erase'])   ){
    echo '';
}
    
            ?>

            
</body>
</html>


