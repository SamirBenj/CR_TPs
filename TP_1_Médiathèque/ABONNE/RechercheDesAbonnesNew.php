<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TP MEDIATHEQUE/style.css" rel="stylesheet">

    <title>Recherche d'un abonne </title>
</head>
<body >
    <h2>Recherche d'un abonne</h2>
    
    <div class="middle">

        <form action="" method="POST">
            <td>Nom d'Abonne</td>
            <input type="text" name="aboNom">

            
            <br></br>
            <input type="submit" value="Rechercher" name="submit"></input>
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


$aboNom = isset($_POST['aboNom']) ? $_POST['aboNom'] : '';




    if(isset($_POST['submit'])) {

        if((empty($aboNom))) {
            echo '<b>Inserer la/les valeur(s)';
        
        }else{

            $sql = "SELECT * FROM ABONNE WHERE aboNom = '$aboNom'";

            if(!mysqli_query($con,$sql)) {
                echo '<b>L abonne n a pas etait trouver<b>';
            }else
                {
                    echo '<b>l abonne est trouver<b>';
                }
    
            }
        }

if(isset($_POST['erase'])   ){
    echo '';
}
    
            ?>

            
</body>
</html>


