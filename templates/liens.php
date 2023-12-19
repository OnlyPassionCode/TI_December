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
    <main>
        <h2>Quelques liens vers nos partenaires.</h2>
        <div id="imagepresentation"><img src="img/liens.jpg" alt="Planete dans une main avec bouton search."></div>
        <p id="explication">D'autres capitales se sont associés à notre site.</p>
        <section id="link">
            <ul>
                <li><a href="#">Berlin</a></li>
                <li><a href="#">Vienne</a></li>
                <li><a href="#">Paris</a></li>
                <li><a href="#">Madrid</a></li>
                <li><a href="#">Rome</a></li>
                <li><a href="#">Londres</a></li>
            </ul>
            <ul>
                <li><a href="#">Lisbonne</a></li>
                <li><a href="#">Prague</a></li>
                <li><a href="#">Amsterdam</a></li>
                <li><a href="#">Copenhague</a></li>
                <li><a href="#">Dublin</a></li>
                <li><a href="#">Arthènes</a></li>
            </ul>
            <ul>
                <li><a href="#">Sofia</a></li>
                <li><a href="#">Varsovie</a></li>
                <li><a href="#">Helsinki</a></li>
                <li><a href="#">Stockholm</a></li>
                <li><a href="#">Oslo</a></li>
                <li><a href="#">Budapest</a></li>
            </ul>
        </section>
    </main>
</body>
</html>