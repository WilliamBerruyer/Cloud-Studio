<?php

class Utilisateur{
    
    private int $id;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $mdp;
    private string $photoProfil;

    function __construct(int $id=-1, string $nom='', string $prenom='', string $email='', string $mdp='', string $photoProfil='')
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->photoProfil = $photoProfil;
    }

    function __get($name)
    {
        return $this->$name;
    }
}
?>
