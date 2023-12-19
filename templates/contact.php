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
    <main id="contact">
        <h2>Pour nous contacter</h2>
        <div id="imagepresentation"><img src="img/contacts.jpg" alt="Image de contact"></div>
        <p id="explication">Pour nous laisser un commentaire ou pour obtenir un renseignement complémentaire, remplissez le formulaire ci-dessous :</p>
        <form action="" method="GET">
            <table>
                <tr>
                    <td><label for="lastName">NOM :</label></td>
                    <td><input type="text" name="lastName" id="lastName"></td>
                </tr>
                <tr>
                    <td><label for="firstName">PRENOM :</label></td>
                    <td><input type="text" name="firstName" id="firstName"></td>
                </tr>
                <tr>
                    <td><label for="city">VILLE :</label></td>
                    <td><input type="text" name="city" id="city"></td>
                </tr>
                <tr>
                    <td><label for="email">E-MAIL :</label></td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td><label for="commentary" id="labelCommentary">COMMENTAIRES :</label></td>
                    <td><textarea type="text" name="commentary" id="commentary"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" id="submit" value="Envoyer votre message"></td>
                </tr>
            </table>
        </form>
    </main>
</body>
</html>