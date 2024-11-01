<?php
require_once '../model/User.class.php';
require_once '../model/Projet.class.php';
require_once '../model/DAO.class.php';

$projectName = $_POST['projectName'];
$softwareUsed = $_POST['softwareUsed'];
$id = $_SESSION["user"]->getId();

$project = new Projet(-1,$idCreateur,$projectName);
$bd = new DAO();

$bd->addProjet($project);
$view = new View();
$view->assign('contenu','Your project have been successfully created');
$view->display("../views/registerValidation.php");

?>
