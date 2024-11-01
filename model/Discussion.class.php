<?php

class Discussion{
    private int $id;
    private int $idUtilisateur;
    private string $message;
    private int $idProjet;

    function __construct(int $id=-1, int $idUtilisateur=-1, string $message='', $idProjet=-1)
    {
        $this->id = $id;
        $this->idUtilisateur = $idUtilisateur;
        $this->message = $message;
        $this->idProjet = $idProjet;
    }

    function __get($name)
    {
        return htmlspecialchars($this->$name);
    }
}

?>