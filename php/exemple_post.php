<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exemple requête POST</title>
        <link rel="stylesheet" href="css/test.css"/>
        
    </head>

    <body>
        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="page2.html">Page 2</a></li>
                <li><a href="/php/enligne.php">Php en ligne</a></li>
                <li><a href="/php/exemple_classe.php">Exemple classe</a></li>
                <li><a href="/php/exemple_get.php">Exemple get</a></li>
                <li><a href="/php/exemple_post.php">Exemple post</a></li>
            </ul>
        </nav>
        
        <?php
            if (isset($_POST['nom'])) {
              echo 'Mon nom est '.$_POST['nom'];
            } else {
              echo '<form action="/php/exemple_post.php" method="POST">';
              echo '<label for="nom">Votre nom</label>';
              echo '<input name="nom" type="text" />';
              echo '<input type="submit" value="valider" />';
              echo '</form>';
            }
        ?>
    </body>
</html>