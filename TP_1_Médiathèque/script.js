function locationAbbones() {
 
 
    if (document.getElementById("ListAbbone").selectedIndex == 1) {
        var url = "./ABONNE/ListeDesAbonne.php";
        window.location.href = url;
    }
 
    if (document.getElementById("ListAbbone").selectedIndex == 2) {
        var url = "./ABONNE/CreationDesAbonneNew.php";
        window.location.href = url;
    }
    if (document.getElementById("ListAbbone").selectedIndex == 3) {
        var url = "./ABONNE/ModificationDesAbonneNew.php";
        window.location.href = url;
    }
    if (document.getElementById("ListAbbone").selectedIndex == 4) {
        var url = "./ABONNE/SuppresionDesAbonnesNew.php";
        window.location.href = url;
    }
    if (document.getElementById("ListAbbone").selectedIndex == 5) {
        var url = "./ABONNE/RechercheDesAbonnesNew.php";
        window.location.href = url;
    }
}

function LocationDocument() {


    if (document.getElementById("ListDocument").selectedIndex == 1) {
        var url = "./DOCUMENT/ListeDesDocument.php";
        window.location.href = url;
        console.log('liste 0');
    }

    if (document.getElementById("ListDocument").selectedIndex == 2) {
        var url = "./DOCUMENT/CreationDesDocument.php";
        window.location.href = url;
    }
    if (document.getElementById("ListDocument").selectedIndex == 3) {
        var url = "./DOCUMENT/ModificationDesDocument.php";
        window.location.href = url;
    }
    if (document.getElementById("ListDocument").selectedIndex == 4) {
        var url = "./DOCUMENT/SuppressionDocument.php";
        window.location.href = url;
    }

    if (document.getElementById("ListDocument").selectedIndex == 5) {
        var url = "./DOCUMENT/RechercheDocument.php";
        window.location.href = url;
    }
}

function LocationEmprunt() {


    if (document.getElementById("ListEmprunt").selectedIndex == 1) {
        var url = "./SORTIE/SortieDocument.php";
        window.location.href = url;
        console.log('liste 0');
    }

    if (document.getElementById("ListEmprunt").selectedIndex == 2) {
        var url = "./RETOUR/RetourDocument.php";
        window.location.href = url;
    }
    
}

