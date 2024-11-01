<?php
require_once("/var/www/html/model/DAO.class.php");

$dao = new DAO();
$u1 = new Utilisateur(0,"nomTest","prenomTest","test@gmail.com","123","1.png");
$dao->addUtilisateur($u1);
$u2 = $dao->getUtilisateurCo();
$p = new Projet(0,1,"SuperProjet");
$dao->addProjet($p);
$dao->addVersionMix(1,1,"best version divine");
?>
