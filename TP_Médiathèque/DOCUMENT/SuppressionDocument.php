<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TP MEDIATHEQUE/style.css" rel="stylesheet">

    <title>Suppresion du document </title>
</head>
<body >
    <h2>Suppresion du document </h2>
    
    <div class="middle">

        <form action="" method="POST">
            <td>Reference du document</td>
            <input type="text" name="docRef">

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


$docRef = isset($_POST['docRef']) ? $_POST['docRef'] : '';




    if(isset($_POST['submit'])) {

        if((empty($docRef))) {
            echo '<b>Inserer la/les valeur(s)';
        
        }else{

            $sql = "DELETE FROM DOCUMENT WHERE docRef = '$docRef'";

            if(!mysqli_query($con,$sql)) {
                echo '<b>Le document n a pas etait supprimer<b>';
            }else
                {
                    echo '<b>le document est supprimer<b>';
                }
    
            }
        }

if(isset($_POST['erase'])   ){
    echo '';
}
    
            ?>

            
</body>
</html>


