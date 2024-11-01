<?php
class Role{
    private string $nom;
    private int $idUtilisateur;
    private int $idProjet;

    function __construct(string $nom='', int $idUtilisateur=-1, int $idProjet=-1)
    {
        $this->nom = $nom;
        $this->idUtilisateur = $idUtilisateur;
        $this->idProjet = $idProjet;
    }

    function __get($name)
    {
        return htmlspecialchars($this->$name);
    }


}


?>