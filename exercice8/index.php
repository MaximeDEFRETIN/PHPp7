<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 8</title>
    </head>
    <body>
        <?php
        /* Si il y a des valeurs dans les input, alors on affiche une phrase */
        if (isset($_POST['choice']) && isset($_POST['name']) && isset($_POST['firstName']) && isset($_FILES['file']) && $_FILES['file']['type'] = 'application/pdf' || 'application/png' || 'application/odt') {
                echo 'Vous êtes ' . $_POST['choice'] . ' ' . $_POST['name'] . ' ' . $_POST['firstName'] . '. Le fichier ' . $_FILES['file']['name'] . ' est un fichier au format ' . $_FILES['file']['type'] . '. L\'envoi a bien été effectué !';
            /* Si il n'y a aucune valeur dans les input, on affiche le formulaire */
        } else {
            ?>
            <form method="post" action="index.php" name="form" enctype="multipart/form-data">
                <fieldset>
                    <legend>Formulaire</legend>
                    <select name="choice">
                        <option name="Mr" value='Mr'>Mr</option>
                        <option name="Mme" value='Mme'>Mme</option>
                    </select>
                    <input type="text" name="name" placeholder="Nom"/>
                    <input type="text" name="firstName" placeholder="Prénom"/>

                    Formulaire d'envoi de fichier :
                    <input type="file" name="file" />
                    <input type="submit" value="Envoie !"/>
                </fieldset>
            </form>
        <?php } ?><!--Cette balise PHP ferme le else, qui englobe le formulaire-->
    </body>
</html>