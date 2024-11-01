<?php
// Inclusion du framework
include_once(__DIR__."/../framework/view.class.php");
$view = new View();
//$view->assign('contenu','');
$view->display("../views/signUp.view.php")
?>
