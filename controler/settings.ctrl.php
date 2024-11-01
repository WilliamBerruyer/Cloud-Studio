<?php
include_once(__DIR__."/../framework/view.class.php");
require_once(__DIR__."/../model/User.class.php");
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
$user = new User();
$user = $_SESSION['User'];
$name = $user->getName();
$surname = $user->getSurname();
$nickname = $user->getNickname();
$email = $user->getEmail();
//$password = $user->getPassword();
$picture = $user->getPicture();
$id = $user->getId();
$view = new View();
$view->assign('Name',$name);
$view->assign('Surname',$surname);
$view->assign('Nickname',$nickname);
$view->assign('Email',$email);
//$view->assign('Password',$name);
$view->assign('Picture',$picture);
$view->assign('Id',$id);
$view->display("../views/settings.view.php")
?>
