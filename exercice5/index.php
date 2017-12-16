<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5</title>
    </head>
    <body>
        <form method="post" action="index.php">
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
        
        <?php
        if (isset($_POST['choice']) && isset($_POST['name']) && isset($_POST['firstName'])) {
            echo 'Vous êtes ' . $_POST['choice'] . ' ' . $_POST['name'] . ' ' . $_POST['firstName'] . '.';
        } else{
            echo'il n\'y a rien';
        }
        ?>   
    </body>
</html>