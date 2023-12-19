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
    <!-- Si je met la nav dans le header le sticky ne fonctionne plus -->
    <?php require("inc/menu.php"); ?>
    <main>
        <h2>Bienvenue sur notre site consacré à Helsinki.</h2>
        <div id="imagepresentation"><img src="img/armoiries.png" alt="Blason de la ville de Helsinki"></div>
        <div>
            <p>
                Helsinki  est la capitale et la plus grande ville de la Finlande avec 642 045 habitants dans la commune et 1 456 619 dans le Grand Helsinki. Helsinki est la capitale la plus septentrionale du monde après Reykjavik, capitale de l'Islande. La ville a la plus forte population immigrée de tout le pays. Il y a plus de 130 nationalités résidant dans la ville d'Helsinki. Elle s'étale sur une presqu'île entourée d'un grand nombre d'îles et est fortement caractérisée par la présence de l'eau. Helsinki est un port marchand ouvert sur le golfe de Finlande.
            </p>
            <p>
                Ses habitants sont appelés les Helsinkiens ; en finnois helsinkiläiset, en suédois helsingforsare.
                La ville s'appelait à l'origine Helsingfors ([hɛlsiŋ'fɔʂ], qui reste aujourd'hui encore le nom officiel en suédois. Helsingfors proviendrait du nom d'une paroisse voisine Helsinge (qui aurait donné le nom finnois Helsinki) et de fors, rapides en suédois (lesdits rapides auraient traversé le village d'origine). Une autre version attribue le nom aux immigrants suédois venus de la province de Hälsingland.
            </p>
            <p>
                En argot de Helsinki, la ville est aussi appelée Stadi (du suédois stad, ville) et Hesa en finnois familier.
            </p>
        </div>

        <section id="sommaire">
            <div><a href="?p=geo">Une brève présentation de Helsinki sur son rôle en Finlande</a></div>
            <div><a href="?p=hist">Un rappel historique de sa fondation à aujourd'hui</a></div>
            <div><a href="?p=cult">Un tour d'horizon en matière d'art et culture</a></div>
            <div><a href="?p=gal">Une galerie de photographies</a></div>
            <div><a href="?p=form">Un formulaire pour nous contacter</a></div>
            <div><a href="?p=link">Des liens vers des sites partenaires</a></div>
        </section>

        <p id="wiki"><a href="https://fr.wikipedia.org/wiki/Helsinki" target="_blank">Sources: Wikipedia - Ville de Helsinki</a></p>
    </main>
</body>
</html>