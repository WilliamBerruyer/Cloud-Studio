<?php
// Inclusion du framework
require_once '../framework/view.class.php';
require_once '../model/Utilisateur.class.php'; // J'inclus la classe Utilisateur, pour pouvoir l'utiliser dans le site.
require_once("../model/DAO.class.php");
$email = $_POST['email'];
$password = $_POST['password'];
$view = new View();

$dao = new DAO($email,$password);
if ($dao->getUtilisateurCo()->nom == ""){
  $message = "Les identifiants ne sont pas corrects, merci de réessayer";
  $view->assign('messageErreur',$message);
  $view->display("../views/login.view.php");
}
else{
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  $_SESSION['User'] = $dao->getUtilisateurCo();
  $view->display("../views/home.view.php");
}
?>
