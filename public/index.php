<?php
$content = "accueil.php";
$title = "Accueil";
if(isset($_GET["p"])){
    switch($_GET["p"]){
        case "geo":
            $content = "geographie.php";
            $title = "Geographie";
            break;
        case "hist":
            $content = "histoire.php";
            $title = "Histoire";
            break;
        case "cult":
            $content = "culture.php";
            $title = "Culture";
            break;
        case "gal":
            $content = "galerie.php";
            $title = "Galerie";
            break;
        case "form":
            $content = "contact.php";
            $title = "Contact";
            break;
        case "link":
            $content = "liens.php";
            $title = "Liens";
            break;
        case "accueil":
        case "index":
            break;
        default:
            $content = "erreur404.php";
            $title = "Erreur404";
            break;
    }
}

require ("../templates/$content");