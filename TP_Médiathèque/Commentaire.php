<?php

class Commentaire {

	private $connexionBDD = null;

	public function __connexion() {

            $host = 'localhost';
            $user = 'root';
            $password = 'toor';
            
            //On établit la connexion
            $connexionBDD = new PDO('mysql:host=localhost;dbname=tp_billet','root','toor');
    
    }

public function creationCommentaire($Auteur_com, $Mail_com, $Commentaire, $Id_bil) {
        $creerBillet = $this->connexionBDD->prepare("INSERT INTO Billet(Date_com, Auteur_com, Mail_com, Commentaire, Id_bil) VALUES (now(), :Dates , :Auteur, :Mail, :Commentaire, :Id_Billet);");

        
        $creerBillet->bindParam(":Auteur", $_POST["Auteur_com"]);
        $creerBillet->bindParam(":Mail", $_POST["Mail_com"]);
        $creerBillet->bindParam(":Commentaire", $_POST["Commentaire"]);
        
        return $creerBillet->execute();
    }

public function getCommentaireAuteur() {
        return $this->connexionBDD->query("SELECT * FROM Commentaire ORDER BY Auteur_com;");
    }

public function getCommentaireParDate() {
        return $this->connexionBDD->query("SELECT * FROM Commentaire ORDER BY Date_com;");
    }

}

?>
