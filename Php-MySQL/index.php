<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test</title>
        <meta charset="utf-8" />
        <meta name="description" content="Un chiffre aléatoire va être choisi entre 1 et 10 grâce au code PHP qui suit : <?php echo rand(1, 10); ?>" />
    </head>
    <body>
        <h2>Page de test</h2>
        
        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php echo 'Cette phrase est générée par PHP.' ?>
            Voici quelques petits tests :
        </p>
        
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
        
        <?php
           echo 'Cette phrase est aussi générée par PHP.'
        ?>
    </body>
</html>