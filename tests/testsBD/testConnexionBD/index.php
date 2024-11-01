<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Page test accès bd</title>
  </head>
  <body>
    <?php
    $db = new PDO('mysql:host=localhost;dbname=DB', 'root', 'root');
    $sortie = $db->query("select * from clients");
    $result = $sortie->fetchALL(PDO::FETCH_NUM);
    ?>
    <p><?= $result[0][1] ?></p>
  </body>
</html>
