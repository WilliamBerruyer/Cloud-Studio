<?php
class VersionMaster{

    private int $id;
    private int $idProjet;
    private int $idCreateur;
    private int $description;

    function __construct(int $id=-1, int $idProjet=-1, int $idCreateur=-1, string $info='')
    {
        $this->id = $id;
        $this->idProjet = $idProjet;
        $this->idCreateur = $idCreateur;
        $this->description = $description;
    }

    function __get($name)
    {
        return htmlspecialchars($this->$name);
    }
}


?>