<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TP MEDIATHEQUE/style.css" rel="stylesheet">

    <title>Retour d'un document </title>
</head>
<body >
    <h2>Retour d'un document </h2>
    
    <div class="middle">

        <form action="" method="POST">
            <td>Numero du retour</td>
            <input type="text" name="retNum">

            <br></br><td>Date de retour</td>
            <input type="text" name="retDate">

            <br></br><td>Numero d'un abonne</td>
            <input type="text" name="retAboNum">

            <br></br><td>Reference d'un document</td>
            <input type="text" name="retDocRef">

            <br></br>
            <input type="submit" value="Ajouter" name="submit"></input>
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


$retNum = isset($_POST['retNum']) ? $_POST['retNum'] : '';
$retDate = isset($_POST['retDate']) ? $_POST['retDate'] : '';
$retAboNum = isset($_POST['retAboNum']) ? $_POST['retAboNum'] : '';
$retDocRef = isset($_POST['retDocRef']) ? $_POST['retDocRef'] : '';



    if(isset($_POST['submit'])) {

        if((empty($retNum) || empty($retDate) || empty($retAboNum) ||empty($retDocRef))) {
            echo '<b>Inserer la/les valeur(s)';
        
        }else{

            $sql = "INSERT INTO RETOUR (retNum,retDate,retAboNum,retDocRef) VALUES ('$retNum','$retDate' ,'$retAboNum','$retDocRef')";

            if(!mysqli_query($con,$sql)) {
                echo '<b>Le retour n a pas etait enregistrer<b>';
            }else
                {
                    echo '<b>Le retour est enregistrer<b>';
                }
    
            }
        }

if(isset($_POST['erase'])   ){
    echo '';
}
    
            ?>

            
</body>
</html>


