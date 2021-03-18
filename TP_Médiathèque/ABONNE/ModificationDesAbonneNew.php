<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TP MEDIATHEQUE/style.css" rel="stylesheet">

    <title>Modification Abonne </title>
</head>
<body >
    <h2>Modification d'un abonne</h2>
    
    <div class="middle">

        <form action="" method="POST">
            <td>Numero d'Abonne</td>
            <input type="text" name="aboNum">

            <br></br><td>Nom de l'Abonne</td>
            <input type="text" name="aboNom">

            <br></br><td>Prenom de l'Abonne</td>
            <input type="text" name="aboPrenom">

            <br></br><td>Adresse de l'Abonne</td>
            <input type="text" name="aboAdresse">

            <br></br><td>Code Postal de l'Abonne</td>
            <input type="text" name="aboCPostal">
            
            <br></br><td>Ville de l'Abonne</td>
            <input type="text" name="aboVille">

            <br></br><td>Telephone de l'Abonne</td>
            <input type="text" name="aboTel1">

            <br></br><td>Telephone de l'Abonne</td>
            <input type="text" name="aboTel2">

            <br></br>
            <input type="submit" value="Modifier" name="submit"></input>
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
$aboNom = isset($_POST['aboNom']) ? $_POST['aboNom'] : '';
$aboPrenom = isset($_POST['aboPrenom']) ? $_POST['aboPrenom'] : '';
$aboAdresse = isset($_POST['aboAdresse']) ? $_POST['aboAdresse'] : '';
$aboCPostal = isset($_POST['aboCPostal']) ? $_POST['aboCPostal'] : '';
$aboVille = isset($_POST['aboVille']) ? $_POST['aboVille'] : '';
$aboTel1 = isset($_POST['aboTel1']) ? $_POST['aboTel1'] : '';
$aboTel2 = isset($_POST['aboTel2']) ? $_POST['aboTel2'] : '';


    if(isset($_POST['submit'])) {

        if((empty($aboNum) || empty($aboNom) || empty($aboPrenom) ||empty($aboAdresse) ||empty($aboCPostal) || empty($aboVille) || empty($aboTel1) || empty($aboTel2) )) {
            echo '<b>Inserer la/les valeur(s)';
        
        }else{

            $sql = "UPDATE ABONNE SET aboNum = '$aboNum', aboNom = '$aboNom', aboPrenom = '$aboPrenom', aboAdresse = '$aboAdresse', aboCPostal = '$aboCPostal', aboVille = '$aboVille', aboTel1 = '$aboTel1', aboTel2 = '$aboTel2' WHERE aboNum = '$aboNum'  ";

            if(!mysqli_query($con,$sql)) {
                echo '<b>Un abonne n a pas etait modifier<b>';
            }else
                {
                    echo '<b>Un abonne est modifier <b>';
                }
    
            }
        }

if(isset($_POST['erase'])   ){
    echo '';
}
    
            ?>

            
</body>
</html>


