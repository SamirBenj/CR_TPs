<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/BASE DE DONNEES ET WEB(PHP TSOUNGUI)/TP MEDIATHEQUE/style.css" rel="stylesheet">

    <title>Modification du document </title>
</head>
<body >
    <h2>Modification du document </h2>
    
    <div class="middle">

        <form action="" method="POST">
            <td>Reference du document</td>
            <input type="text" name="docRef">

            <br></br><td>Titre du document</td>
            <input type="text" name="docTitre">

            <br></br><td>Auteur du document</td>
            <input type="text" name="docAuteur">

            <br></br><td>Annee du document</td>
            <input type="text" name="docAnnee">

            <br></br><td>Editeur du document</td>
            <input type="text" name="docEditeur">
            
            <br></br><td>Genre du document</td>
            <input type="text" name="docGenre">

            <br></br><td>Type du document</td>
            <input type="text" name="docTypeDocCode">

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


$docRef = isset($_POST['docRef']) ? $_POST['docRef'] : '';
$docTitre = isset($_POST['docTitre']) ? $_POST['docTitre'] : '';
$docAuteur = isset($_POST['docAuteur']) ? $_POST['docAuteur'] : '';
$docAnnee = isset($_POST['docAnnee']) ? $_POST['docAnnee'] : '';
$docEditeur = isset($_POST['docEditeur']) ? $_POST['docEditeur'] : '';
$docGenre = isset($_POST['docGenre']) ? $_POST['docGenre'] : '';
$docTypeDocCode = isset($_POST['docTypeDocCode']) ? $_POST['docTypeDocCode'] : '';



    if(isset($_POST['submit'])) {

        if((empty($docRef) || empty($docTitre) || empty($docAuteur) ||empty($docAnnee) ||empty($docEditeur) || empty($docGenre) || empty($docTypeDocCode ))) {
            echo '<b>Inserer la/les valeur(s)';
        
        }else{

            $sql = "UPDATE DOCUMENT SET  docRef = '$docRef', docTitre = '$docTitre', docAuteur = '$docAuteur', docAnnee = '$docAnnee', docEditeur = '$docEditeur', docGenre = '$docGenre', docTypeDocCode = '$docTypeDocCode' WHERE docRef = '$docRef'  ";

            if(!mysqli_query($con,$sql)) {
                echo '<b>Le document n a pas etait modifier<b>';
            }else
                {
                    echo '<b>le document est modifier<b>';
                }
    
            }
        }

if(isset($_POST['erase'])   ){
    echo '';
}
    
            ?>

            
</body>
</html>


