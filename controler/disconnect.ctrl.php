<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
// Inclusion du framework
include_once("../framework/view.class.php");
require_once '../model/Utilisateur.class.php'; // J'inclus la classe Utilisateur, pour pouvoir l'utiliser dans le site.
require_once '../model/DAO.class.php';
session_destroy();
$view = new View();
$view->display("../views/login.view.php")
?>
