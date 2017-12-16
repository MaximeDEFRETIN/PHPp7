<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6</title>
    </head>
    <body>
        <?php
        /*Si il y a des valeurs dans les input, alors on affiche une phrase*/
        if (isset($_POST['choice']) && isset($_POST['name']) && isset($_POST['firstName'])) {
            echo 'Vous êtes ' . $_POST['choice'] . ' ' . $_POST['name'] . ' ' . $_POST['firstName'] . '.';
            /*Si il n'y a aucune valeur dans les input, on affiche le formulaire*/
        } else {
            ?>
            <form method="post" action="index.php" name="form">
                <fieldset>
                    <legend>Formulaire</legend>
                    <select name="choice">
                        <option name="Mr" value='Mr'>Mr</option>
                        <option name="Mme" value='Mme'>Mme</option>
                    </select>
                    <input type="text" name="name" placeholder="Nom"/>
                    <input type="text" name="firstName" placeholder="Prénom"/>
                    <input type="submit" value="Envoie la sauce !"/>
                </fieldset>
            </form>
        <?php } ?><!--Cette balise PHP ferme le else, qui englobe le formulaire-->
    </body>
</html>