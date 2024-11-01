<?php
include_once(__DIR__."/../framework/view.class.php");
require_once '../model/Utilisateur.class.php'; // J'inclus la classe Utilisateur, pour pouvoir l'utiliser dans le site.
require_once '../model/DAO.class.php';
$surname = $_POST['Prenom'];
$name = $_POST['Nom'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$password_repeat = $_POST['Password-repeat'];
$picture = '';

$view = new View();

if($password != $password_repeat){
    $view->assign('messageErreur','The passwords don\'t match, please retype them.');
    $view->display('../views/signUp.view.php');
}else{
    $user = new Utilisateur(3,$name,$surname,$email,$password,$picture);
    $bd = new DAO();
    $bd->addUtilisateur($user);
    $view->assign('contenu','Your account have been successfully created');
    $view->display("../views/registerValidation.view.php");
}
?>
