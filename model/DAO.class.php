<?php
require_once("Utilisateur.class.php");
require_once("Discussion.class.php");
require_once("Projet.class.php");
require_once("Role.class.php");
require_once("VersionMaster.class.php");
require_once("VersionRaw.class.php");
require_once("VersionMix.class.php");

class DAO{

    private string $database = 'mysql:dbname=clstudio-database;host=cloudstudio.mysql.database.azure.com;port=3306;charset=utf8';
    private string $chemin = '/var/www/html/data/';
    private PDO $connection;
    private string $email;
    private string $mdp;

    function __construct($mail='default', $mdp='default')
    {
        try
        {
            $this->email = $mail;
            $this->mdp = $mdp;
            $this->connection = new \PDO($this->database, "ouyppnrxzt@clstudio-server", "iYHMOdJiAaICvF$1");
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::MYSQL_ATTR_SSL_CA => '\SSL\DigiCertGlobalRootG2.crt.pem');
            $this->connection->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        }
        catch (PDOException $e)
        {
            die("PDO Error :".$e->getMessage()." $this->database\n");
        }
    }

    function getUtilisateurCo() : Utilisateur
    {
        $result = $this->connection->query("SELECT * FROM Utilisateur WHERE email='$this->email' AND mdp='$this->mdp'");
        $final = $result->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Utilisateur');
        if($final[0] != null){
            return $final[0];
        }else{
            return new Utilisateur();
        }
    }

    function getDiscussion() : array
    {
        $result = $this->connection->query("SELECT * FROM Discussion");
        $final = $result->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Discussion');
        return $final;
    }

    function getUtilisateur(int $id) : Utilisateur
    {
        $result = $this->connection->query("SELECT * FROM Utilisateur WHERE id='$id'");
        if($result->rowCount()==0)
        {
            return new Utilisateur();
        }
        $final = $result->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Utilisateur');

        return $final[0];
    }

    function addDiscussion($idUser, $sms, $idProjet)
    {
        $result = $this->connection->query("INSERT INTO Discussion(idUtilisateur, message, idProjet) VALUES ('$idUser','$sms',$idProjet)");
    }

    function addUtilisateur(Utilisateur $u){
      if ($this->email == 'default' && $this->mdp == 'default') {
        //$this->connection->exec("CREATE USER \'$u->email\'@\'%\' IDENTIFIED BY \'$u->mdp\'");
        $this->email = $u->email; $this->mdp = $u->mdp;
        $this->connection->exec("INSERT INTO Utilisateur(nom,prenom,email,mdp,photoProfil) VALUES(\"$u->nom\",\"$u->prenom\",\"$u->email\",\"$u->mdp\",\"$u->photoProfil\")");
      }
    }

    function addProjet(Projet $p){
        $this->connection->exec("INSERT INTO Projet(idCreateur,nom) VALUES(\"$p->idCreateur\",\"$p->nom\")");
        $result = $this->connection->query("SELECT MAX(id) FROM Projet");
        $final = $result->fetchAll(PDO::FETCH_NUM)[0][0];
        $p->id = $final;
        $c = $this->chemin . "Projets/$p->id";
        shell_exec("mkdir $c $c/Raw $c/Mix $c/Master $c/Raw/v1 $c/Mix/v1 $c/Master/v1");
        $infoDeBase = 'Première version créée par défaut';
        $this->connection->exec("INSERT INTO VersionRaw(idProjet, idCreateur, info) VALUES(\"$final\",\"$p->idCreateur\",\"$infoDeBase\")");
        $this->connection->exec("INSERT INTO VersionMix(idProjet, idCreateur, info) VALUES(\"$final\",\"$p->idCreateur\",\"$infoDeBase\")");
        $this->connection->exec("INSERT INTO VersionMaster(idProjet, idCreateur, info) VALUES(\"$final\",\"$p->idCreateur\",\"$infoDeBase\")");
    }

    function getListeProjets(int $idCreateur) : array{
        $result = $this->connection->query("SELECT * FROM Projet WHERE idCreateur=$idCreateur");
        $final = $result->fetchALL(PDO::FETCH_NUM);
        return $final;
    }

    function addVersionMix(int $idProjet, int $idCreateur, string $info){
        $this->connection->exec("INSERT INTO VersionMix(idProjet, idCreateur, info) VALUES(\"$idProjet\",\"$idCreateur\",\"$info\")");
        $result = $this->connection->query("SELECT MAX(id) FROM VersionMix");
        $final = $result->fetchAll(PDO::FETCH_NUM)[0][0];
        $c = $this->chemin . "Projets/$idProjet/Mix";
        shell_exec("mkdir $c/v$final");
    }

    function addVersionRaw(int $idProjet, int $idCreateur, string $info){
        $this->connection->exec("INSERT INTO VersionMix(idProjet, idCreateur, info) VALUES(\"$idProjet\",\"$idCreateur\",\"$info\")");
        $result = $this->connection->query("SELECT MAX(id) FROM VersionRaw");
        $final = $result->fetchAll(PDO::FETCH_NUM)[0][0];
        $c = $this->chemin . "Projets/$idProjet/Mix";
        shell_exec("mkdir $c/v$final");
    }

    function addVersionMaster(int $idProjet, int $idCreateur, string $info){
        $this->connection->exec("INSERT INTO VersionMix(idProjet, idCreateur, info) VALUES(\"$idProjet\",\"$idCreateur\",\"$info\")");
        $result = $this->connection->query("SELECT MAX(id) FROM VersionMaster");
        $final = $result->fetchAll(PDO::FETCH_NUM)[0][0];
        $c = $this->chemin . "Projets/$idProjet/Mix";
        shell_exec("mkdir $c/v$final");
    }

    function getListeVersionsMix(int $idProjet) : array{
        $result = $this->connection->query("SELECT * FROM VersionMix WHERE idProjet=$idProjet");
        $final = $result->fetchALL(PDO::FETCH_NUM);
        return $final;
    }

    function getListeVersionsRaw(int $idProjet) : array{
        $result = $this->connection->query("SELECT * FROM VersionRaw WHERE idProjet=$idProjet");
        $final = $result->fetchALL(PDO::FETCH_NUM);
        return $final;
    }

    function getListeVersionsMaster(int $idProjet) : array{
        $result = $this->connection->query("SELECT * FROM VersionMaster WHERE idProjet=$idProjet");
        $final = $result->fetchALL(PDO::FETCH_NUM);
        return $final;
    }

    function getListeFichiersMix(int $idProjet, int $idVersion) : array{
        return scandir("/var/www/html/data/Projets/$idProjet/Mix/$idVersion");
    }

    function getListeFichiersRaw(int $idProjet, int $idVersion) : array{
        return scandir("/var/www/html/data/Projets/$idProjet/Raw/$idVersion");
    }

    function getListeFichiersMaster(int $idProjet, int $idVersion) : array{
        return scandir("/var/www/html/data/Projets/$idProjet/Master/$idVersion");
    }

    function getURLFichierMix(int $idProjet, int $idVersion, string $nomFichier) : string{
        return "/var/www/html/data/Projets/$idProjet/Mix/$idVersion/$nomFichier";
    }

    function getURLFichierRaw(int $idProjet, int $idVersion, string $nomFichier) : string{
        return "/var/www/html/data/Projets/$idProjet/Raw/$idVersion/$nomFichier";
    }

    function getURLFichierMaster(int $idProjet, int $idVersion, string $nomFichier) : string{
        return "/var/www/html/data/Projets/$idProjet/Master/$idVersion/$nomFichier";
    }
}

?>
