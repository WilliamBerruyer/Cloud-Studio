<!doctype html>
<?php $contenu?>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href= '../style.css' />
    <title><?= $nomPage ?></title>   <!-- Élément spécifique -->
  </head>
  <body>
    <div id="global">
      <header>
        <h1 id="titreSite"><a href="accueil.ctrl.php">CloudStudio</a></h1>
        <ul class="menu">
          <li><a href="accueil.ctrl.php">Home</a></li>
          <li><a href="projects.ctrl.php">Projects</a></li>
          <li><a href="settings.ctrl.php">Account Settings</a></li>
          <li><a href="connexion.ctrl.php">LogIn/Out</a></li>
        </ul>
      </header>
      <h2 id="barreNoire"><?= $nomPage ?></h2>
      <div id="contenu">
        <p><?= $contenu ?></p>
      </div>
      <footer id="piedSite">

      </footer>
    </div> <!-- #global -->
  </body>
</html>
