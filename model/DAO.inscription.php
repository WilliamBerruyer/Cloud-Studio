<?php 
require_once("Utilisateur.php");

try
{
    $dsn = 'mysql:dbname=clstudio-database;host=clstudio-server.mysql.database.azure.comport=3306;charset=utf8';
    $connection = new \PDO($dsn, 'ouyppnrxzt', 'Pimaille05');
    $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    $connection->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
    $connection->setAttribute(PDO::MYSQL_ATTR_SSL_CA, 'SSL/DigiCertGlobalRootG2.crt.pem');


}
catch(Exception $e)
{
    echo 'erreur lors de l\'authentification'."\n";
}

function inscription(string $nom, string $prenom, string $email, string $mdp, string $photoProfil)
{
    $user = new Utilisateur($nom, $prenom, $email, $mdp, $photoProfil);
    $connection->query("INSERT INTO Utilisateur(nom,prenom,email,mdp,photoProfil) VALUES('$user->nom','$user->prenom','$user->email','$user->mdp',$user->photoProfil)");
}
$id = 3;
$stmt = $connection->query("SELECT * FROM Utilisateur WHERE id=$id");
$res = $stmt->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'utilisateur');
echo $res[0]->id."\n";
echo $res[0]->nom."\n";
echo $res[0]->prenom."\n";
echo $res[0]->email."\n";
echo $res[0]->mdp."\n";
echo $res[0]->photoProfil."\n";

//$connection->query("CREATE USER 'unmail'@'localhost' IDENTIFIED BY 'unmdp'");
//$connection->query("GRANT ALL ON Projet TO 'unmail'@'localhost'");
//$connection->query("REVOKE ALL ON Utilisateur FROM 'unmail'@'localhost'");
$connection = null;

?>