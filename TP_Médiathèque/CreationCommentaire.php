<!DOCTYPE html>
<html>
    <head>
        <title>Creation d'un commentaire</title>
        
    </head>
    <body>
        <h1>Creation de votre commentaire</h1>
        <form method="POST">


            
            <td>Id</td>
            <input size="25" name="ID" />
            </br></br>

            <td>Date</td>
            <input size="25" name="DATE" />
            </br></br>

            <td>Auteur</td>
            <input size="25" name="AUTEUR" />
            </br></br>

            <td>Mail</td>
            <input size="25" name="MAIL" />
            </br></br>

           <td>Commentaire</td><br/>
            <textarea rows="20" cols="50" name="COMMENTAIRE"></textarea>
            </br></br>

            <td> ID du billet</td>
            <input size="25" name="IDBILLET" />
            </br></br>
            
            <button type="submit">Creation du billet</button>
            </br></br>
        </form>
        <a href="index.html">Retour  accueil </a></br></br>
    </body>
</html>


<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    include_once "../Billet.php";
    $commentaire = new Commmentaire();

    if ($commentaire->creationCommentaire($_POST["ID"], $_POST["DATE"], $_POST["AUTEUR"], $_POST["MAIL"], $_POST["COMMENTAIRE"], $_POST["IDBILLET"])) {
     echo " le commentaire est crée !";
    } else {
        echo "Une erreur est survenue le commentaire n a pas été crée :";
        echo "<a href=\index.php\>Retour au panel</a>";
        exit();
    }
}

?>