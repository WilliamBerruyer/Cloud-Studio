<?php $nomPage = 'Account Settings';?>
<?php
require_once '../model/User.class.php'; // J'inclus la classe Utilisateur, pour pouvoir l'utiliser dans le site.
require_once '../model/DAO.class.php';
ob_start();
if (empty($contenu)){
  $contenu='';
}
?>
<head>
  <link rel="stylesheet" href= '../style.css' />
</head>
<div id="page">
  <div id="upBar">
    <h2 id="test"><a href="settings.ctrl.php">Account</a></h1>
    <h2><a href="settings.ctrl.php">Notifications</a></h1>
  </div>
  <hr>
  <div id="recap">
    <p>Profile</p>
    <hr id="test">
    <div>
      <label>Picture :</label>
      <label><?= $Picture?></label>
    </div>
    <hr>
    <div>
      <label for="Name">Name :</label>
      <input type="text" id="Name" name="Surname" value="<?=$Name?>">
      <!-- <label><?= $Name?></label> -->
    </div>
    <hr>
    <div>
      <label for="Surname">Surname :</label>
      <input type="text" id="Surname" name="Surname" value="<?=$Surname?>">
    </div>
    <hr>
    <div>
      <label for="Nickname">Nickname :</label>
      <input type="text" id="Surname" name="Surname" value="<?=$Nickname?>">
    </div>
    <hr>
    <div>
      <label>Email :</label>
      <label><?= $Email?></label>
    </div>
    <div>
      <label>Identifiant :</label>
      <label><?= $Id?></label>
    </div>
    <hr>
    <a href="settings.ctrl.php">Want to change password ?</a>
    <div id="bottom">
      <form action="settings.ctrl.php" method="post">
        <button type="submit">Save</button>
      </form>
      <form action="settings.ctrl.php" method="post">
        <button type="submit">Reset</button>
      </form>
      <form action="disconnect.ctrl.php" method="post">
        <button type="submit">Disconnect</button>
      </form>
    </div>
  </div>
</div>
<?php
$contenu = ob_get_clean();
?>

<?php require '@template.ctrl.php'; ?>
