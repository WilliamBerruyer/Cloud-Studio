<!doctype html>
<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
$contenu?>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href= '../style.css' />
    <title><?= $nomPage ?></title>   <!-- Élément spécifique -->
  </head>
  <body>
    <div id="global">
      <header>
        <h1 id="titreSite"><a href="home.ctrl.php">CloudStudio</a></h1>
        <ul class="menu">
          <li><a href="home.ctrl.php">Home</a></li>
          <?php if (isset($_SESSION['User'])){
            ?>
            <li><a href="projects.ctrl.php">Projects</a></li>
            <li><a href="settings.ctrl.php">Account Settings</a></li>
            <li><a href="logout.ctrl.php">Log Out</a></li>
          <?php }
          else{
            ?>
            <li><a href="login.ctrl.php">Log In</a></li>
          <?php } ?>

        </ul>
      </header>
      <h2 id="barreNoire"><?= $nomPage ?></h2>
      <div id="contenu">
        <?= $contenu ?>
      </div>
      <footer id="piedSite">
      </footer>
    </div> <!-- #global -->
  </body>
</html>
