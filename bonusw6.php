<!Doctype html>
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

Sur cette page, vous pouvez ajouter des titres sur un fichier<br>
                Nous vérifierons ensuite si ils existent vraiment avant de les ajouter de manière manuelle à la discographie.<br><br>
<form action="bonusw6.php" method="post">
                <input name="nom" type="text" size="33" maxlength="40">
                <input type="submit" value="Ok"></form>
                
  <?php
$nom = $_POST['nom'];
$dir = 'Maneskin.txt';
if(!empty($nom)){
 $file = file_get_contents($dir);
 $list = explode(';', $file);
 if(!in_array($nom, $list)){
  if(file_put_contents($dir, $file.';'.$nom))
   echo 'Morceau correctement ajouté.';
  else
   echo 'Une erreur est survenue!';
 }
 else
  echo 'Le morceau est déjà enregistré!';
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
