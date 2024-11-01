<?php
require_once("Utilisateur.php");
require_once("Discussion.php");

class DAO{

    private string $dsn = 'mysql:dbname=cloudStudio;host=localhost;port=80;charset=utf8';
    private PDO $connection;
    private string $email;
    private string $mdp;

    function __construct($mail, $mdp)
    {
        //try
        //{
            $this->email = $mail;
            $this->mdp = $mdp;
            $this->connection = new \PDO($this->dsn, $this->email, $this->mdp);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        /*}
        catch (PDOException $e)
        {
            die("PDO Error :".$e->getMessage()." $this->database\n");
        }*/
    }

    function getUtilisateurCo() : Utilisateur
    {
        $result = $this->connection->query("SELECT * FROM Utilisateur WHERE email='$this->email' AND mdp='$this->mdp'");
        $final = $result->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Utilisateur');
        return $final[0];
    }

    function getDiscussion() : array
    {
        $result = $this->connection->query("SELECT  * FROM Discussion");
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
}



?>
