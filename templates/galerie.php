<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/lightbox.css" rel="stylesheet" />
    <title><?= $title ?></title>
</head>
<body>
    <?php require("inc/banniere.php"); ?>
    <?php require("inc/menu.php"); ?>
    <main>
        <h2>Galerie Photo</h2>
        <section id="galerie">
            <div class="row">
                <div class="column">
                    <a href="img/1280px_Lutheran_Cathedral_and_the_statue.jpg" data-lightbox="roadtrip" data-title="Lutheran Cathedral et la statue"><img src="img/480px_Lutheran_Cathedral_and_the_statue.jpg" alt=""></a>
                    <p>Lutheran Cathedral et la statue</p>
                </div>
                <div class="column">
                    <a href="img/1280px_Marine_Helsinki.jpg" data-lightbox="roadtrip" data-title="Marine Helsinki"><img src="img/480px_Marine_Helsinki.jpg" alt=""></a>
                    <p>Marine Helsinki</p>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <a href="img/1280px_Mittsommernacht-in-helsinki.jpg" data-lightbox="roadtrip" data-title="Mittsommernacht en Helsinki"><img src="img/480px_Mittsommernacht-in-helsinki.jpg" alt="" ></a>
                    <p>Mittsommernacht en Helsinki</p>
                </div>
                <div class="column">
                    <a href="img/1280px_Finnish_National_Theatre.jpg" data-lightbox="roadtrip" data-title="Finnish National Theatre"><img src="img/480px_Finnish_National_Theatre.jpg" alt=""></a>
                    <p>Finnish National Theatre</p>
                </div>
            </div>
            <div class="row">
                <div class="column">
                <a href="img/1280px_Uspenski_Cathedral_Helsinki.jpg" data-lightbox="roadtrip" data-title="Uspenski cathedral Helsinki"><img src="img/480px_Uspenski_Cathedral_Helsinki.jpg" alt=""></a>
                    <p>Uspenski cathedral Helsinki</p>
                </div>
                <div class="column">
                    <a href="img/1280px_Ateneum.jpg" data-lightbox="roadtrip" data-title="Ateneum"><img src="img/480px_Ateneum.jpg" alt=""></a>
                    <p>Ateneum</p>
                </div>
            </div>
        </section>
    </main>
    <script src="js/lightbox-plus-jquery.js"></script>
    <script>
            lightbox.option({
                'disableScrolling': true,
            })
    </script>
</body>
</html>