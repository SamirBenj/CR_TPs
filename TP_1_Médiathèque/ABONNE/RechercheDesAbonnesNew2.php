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
        <br>
        <br>

    </div>

       <?php

// Initialisation de quelques paramètres nécessaires
 $user = "root"; // nom login à la BDD
 $pass = "toor"; // mot de passe de l'utilisateur
 $db = "Mediatheque"; // Nom de la BDD
 $table= "ABONNE"; // Nom de la table

 $aboNom = $_POST['aboNom'];
 
 
// Etablissement de la connexion à la BDD
    $link = mysqli_connect( "localhost", $user, $pass );
if ( ! $link )

 die( "Impossible de se connecter à MySQL" );

mysqli_select_db( $link,$db)

 or die ( "Impossible d'ouvrir $db: ".mysql_error($link) );

// Préparation de la requête

$requete = "SELECT * FROM $table WHERE aboNom='$aboNom'";

// Exécution de la requête sur la connexion établie

$result = mysqli_query($link,$requete);

// nombre de lignes retournées par la requête SQL

$num_rows = mysqli_num_rows( $result );



// Affichage du résultat de la requête par une boucle TANT QUE (While)

print "<table bgcolor=yellow border=2>\n";

// ------------------------------------------------------

while ( $a_row = mysqli_fetch_row( $result ) )
 {
 print "<tr>\n";

 foreach ( $a_row as $field ) // Affichage d'un champ dans la cellule du tableau

 print "\t<td>$field</td>\n";

 print "</tr>\n";

 }

 

// ----------------------------------------------------------

print "</table>\n";

mysqli_close( $link ); // Fermeture de la oonnexion à la BDD

?>

 




            
</body>
</html>


