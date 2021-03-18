<?php  

class Billet {

	private $connexionBDD = null;

	public function connexion() {
            $host = 'localhost';
            $user = 'root';
            $password = 'toor';
            
            //On établit la connexion
            $connexionBDD = new PDO('mysql:host=localhost;dbname=tp_billet','root','toor');

    }

public function creationBillet($Titre_bil, $Contenu) {
        $creerBillet = $this->connexionBDD->prepare("INSERT INTO billet(Date_bil, Titre_bil, Contenu) VALUES (now(), :Titre_bil, :Contenu);");

       
        $creerBillet->bindParam(":Titre_bil", $_POST["Titre_bil"]);
        $creerBillet->bindParam(":Contenu", $_POST["Contenu"]);
        return $creerBillet->execute();
    }

public function getBilletsTitre() {
        return $this->connexionBDD->query("SELECT * FROM Billet ORDER BY Titre_bil;");
    }

    



}


?>