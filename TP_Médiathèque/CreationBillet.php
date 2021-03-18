
<?php


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    include_once "Billet.php";
    $billet = new Billet();

    if ($billet->creationBillet($_POST["Titre_bil"], $_POST["Contenu"])) {
     echo " le billet est crée !";
    } else {
        echo "Une erreur est survenue le billet n a pas été crée :";
        echo "<a href=\index.html specialchars_decode(string)\>Retour au panel</a>";
        exit();
    }
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Creation du billet</title>
        
    </head>
    <body>
        <h1>Creer votre billet</h1>
        <form method="POST">


          
            Titre<br/>
            <input size="25" name="Titre_bil" /></br></br>
            Contenu<br/>
            <textarea rows="20" cols="50" name="Contenu"></textarea>
            </br></br>
            
            <button type="submit">Creation du billet</button></br></br>
        </form>
        <a href="index.html">Retour  accueil </a></br></br>
    </body>
</html>






