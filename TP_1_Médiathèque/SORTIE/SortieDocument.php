<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TP MEDIATHEQUE/style.css" rel="stylesheet">

    <title>Sortie d'un document </title>
</head>
<body >
    <h2>Sortie d'un document </h2>
    
    <div class="middle">

        <form action="" method="POST">
            <td>Numero de sortie</td>
            <input type="text" name="sortNum">

            <br></br><td>Date de sortie</td>
            <input type="text" name="sortDate">

            <br></br><td>Numero d'un abonne</td>
            <input type="text" name="sortAboNum">

            <br></br><td>Reference d'un document</td>
            <input type="text" name="sortDocRef">

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


$sortNum = isset($_POST['sortNum']) ? $_POST['sortNum'] : '';
$sortDate = isset($_POST['sortDate']) ? $_POST['sortDate'] : '';
$sortAboNum = isset($_POST['sortAboNum']) ? $_POST['sortAboNum'] : '';
$sortDocRef = isset($_POST['sortDocRef']) ? $_POST['sortDocRef'] : '';



    if(isset($_POST['submit'])) {

        if((empty($sortNum) || empty($sortDate) || empty($sortAboNum) ||empty($sortDocRef))) {
            echo '<b>Inserer la/les valeur(s)';
        
        }else{

            $sql = "INSERT INTO SORTIE (sortNum,sortDate,sortAboNum,sortDocRef) VALUES ('$sortNum','$sortDate' ,'$sortAboNum','$sortDocRef')";
           

            if(!mysqli_query($con,$sql)) {
                echo '<b>La sortie n a pas etait enregistrer<b>';
            }else
                {
                    echo '<b>La sortie est enregistrer<b>';
                }
    
            }
        }

if(isset($_POST['erase'])   ){
    echo '';
}
    
            ?>

            
</body>
</html>


