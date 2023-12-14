<!Doctype
<html lang='fr'>
    <head>
        <meta charset="utf-8" >
        <title>Måneskin</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Styles/style.css" rel="stylesheet" type="text/css">
    </head>
     <body>            
        <header>
            <article class="conteneur">
                <article class="haut-gauche">
                    <a href="menu.html">
                        <h1>Måneskin Fanbase</h1></a>
                    </article>
                <article class="haut-droite">
                	<img src="Ressource/mane.png" alt="Groupe">
                </article>
                <nav>
                    <ul>
                        <li><a href="menu.html"><img src="Ressource/retour.png" alt="menu"> Menu</a></li>
                        <li><a href="bio.html"><img src="Ressource/Membres.png" alt="bio"> Biographie</a></li>
                        <li><a href="discographie.html"><img src="Ressource/disque.png" alt="disque"> Discographie</a></li>
                        <li><a href="bonusw5.php"><img src="Ressource/loupe.png" alt="loupe"> Chercher un titre</a></li>
                        <li><a href="bonusw6.php"><img src="Ressource/add.png" alt="add"> Ajouter un titre</a></li>
                    </ul>
                </nav>
            </article>
        </header> 

    <section>
        <article class="conteneur">
            <article class="bonus">
                <br>
                    <?php
define('FICHIER', 'Maneskin.txt');
 ?>
                     <form action="bonusw5.php" method="POST">
                        Mot recherché : <input type="text" name="mot" value=""/><br/>
                        <input type="submit" value="valider" name="valider"/>
                    </form> 
<?php
if (!isset($_POST['valider'])) {
} else {
    $resultats =array();
    @ $fp = fopen(FICHIER, 'r') or die('Ouverture en lecture de "' . FICHIER . '" impossible !');
    while (!feof($fp)) {
        $ligne = fgets($fp, 1024);
        if (preg_match('|\b' . preg_quote($_POST['mot']) . '\b|i', $ligne)) {
            $resultats[] = $ligne;
        }
    }
    fclose($fp);
    $nb = count($resultats);
    $mot = preg_quote($_POST['mot']);
    if ($nb > 0) {
        echo "'$mot' <br>est présent dans la discographie de Maneskin";
    } else {
        echo("Ce nom n'est pas présent !");
    }
}
?>
                </article>
            </article>
            <article class="clear"></article>
    </section>

   <footer class="courte">
       <article class="conteneur">
            <a href="">Informations</a> -
            <a href="">Mentions Légales</a> -
            <a href="">Contact</a>
            <br>
            <p>© 2022 Conception et réalisation par Montoya Alexis. Tous droits réservés.</p>
       </article>
   </footer>
</body>
</html>