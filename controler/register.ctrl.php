<?php
include_once(__DIR__."/../framework/view.class.php");
require_once '../model/User.class.php'; // J'inclus la classe Utilisateur, pour pouvoir l'utiliser dans le site.
require_once '../model/DAO.class.php';
$surname = $_POST['Surname'];
$name = $_POST['Name'];
$pseudo = $_POST['Pseudo'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$picture = '';

$user = new User(3,$name,$surname,$pseudo,$email,$password,$picture);
$bd = new DAO();
$bd->newUser($user);
$view = new View();
$view->assign('contenu','Your account have been successfully created');
$view->display("../views/registerValidation.view.php");





?>
