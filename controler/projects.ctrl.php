<?php
// Inclusion du framework
include_once(__DIR__."/../framework/view.class.php");
$view = new View();
$profilePic = "../assets/img/Rectangle%2025.png";
$name=$_SESSION["User"]->nom." ".$_SESSION["User"]->prenom;
$mail= $_SESSION["User"]->email;

$view->assign("profilePic",$profilePic);
$view->assign("name",$name);
$view->assign("mail",$mail);
$view->assign("nbProjet",0);
$view->assign("1","Sand");
$view->display("../views/projects.view.php");
?>
