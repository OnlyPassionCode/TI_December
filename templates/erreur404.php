<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?= $title ?></title>
</head>
<body>
    <?php require("inc/banniere.php"); ?>
    <?php require("inc/menu.php"); ?>
    <main id="error404">
        <h2>Erreur 404</h2>
        <div id="imagepresentation"><img src="img/404.jpg" alt="404 error"></div>
        <p id="explication">Euh, la page demandée est introuvable !</p>
        <p>
            <a href="?p=accueil">
                Le mieux est de retourner à l'accueil.
            </a>
        </p>
    </main>
</body>
</html>