--create database IF NOT EXISTS cloudStudio CHARACTERE SET 'utf8';

CREATE TABLE IF NOT EXISTS Utilisateur
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(15),
    prenom VARCHAR(15),
    email VARCHAR(50) UNIQUE,
    mdp VARCHAR(20),
    photoProfil VARCHAR(20)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS Projet
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idCreateur INT NOT NULL,
    nom VARCHAR(20) NOT NULL UNIQUE,
    FOREIGN KEY(idCreateur) REFERENCES Utilisateur(id)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS Discussion
(
  id INT PRIMARY KEY AUTO_INCREMENT,
  idUtilisateur INT REFERENCES Utilisateur(id),
  message TEXT,
  idProjet INT REFERENCES Project(id)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS Role
(
    nom ENUM('Guitarist', 'Pianist','Bassist','Singer','Session Player','Lyricist','Axophone player','Flute player', 'Drum Player', 'Mastering Engineer', 'Mixing Engineer', 'Project manager', 'Producer', 'Session Vocalist', 'Composer'),
    idUtilisateur INT NOT NULL,
    idProjet INT NOT NULL,
    FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur(id),
    FOREIGN KEY (idProjet) REFERENCES Projet(id),
    PRIMARY KEY(nom, idUtilisateur, idProjet)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS VersionsMix
(
    id INT NOT NULL CHECK(id<=30),
    idProjet INT REFERENCES Projet(id),
    idCreateur INT REFERENCES Utilisateur(id),
    description TEXT,
    PRIMARY KEY(id,idProjet)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS VersionsRaw
(
    id INT NOT NULL CHECK(id<=30),
    idProjet INT REFERENCES Projet(id),
    idCreateur INT REFERENCES Utilisateur(id),
    description TEXT,
    PRIMARY KEY(id,idProjet)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS VersionsMaster
(
    id INT NOT NULL CHECK(id<=30),
    idProjet INT REFERENCES Projet(id),
    idCreateur INT REFERENCES Utilisateur(id),
    description TEXT,
    PRIMARY KEY(id,idProjet)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS FichiersMix
(
  nom VARCHAR(30) NOT NULL,
  idVersion INT NOT NULL,
  idProjet INT NOT NULL,
  FOREIGN KEY (idVersion,idProjet) REFERENCES VersionsMix(id,idProjet),
  PRIMARY KEY(nom,idVersion,idProjet)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS FichiersRaw
(
  nom VARCHAR(30) NOT NULL,
  idVersion INT NOT NULL,
  idProjet INT NOT NULL,
  FOREIGN KEY (idVersion,idProjet) REFERENCES VersionsRaw(id,idProjet),
  PRIMARY KEY(nom,idVersion,idProjet)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS FichiersMaster
(
  nom VARCHAR(30) NOT NULL,
  idVersion INT NOT NULL,
  idProjet INT NOT NULL,
  FOREIGN KEY (idVersion,idProjet) REFERENCES VersionsMaster(id,idProjet),
  PRIMARY KEY(nom,idVersion,idProjet)
)ENGINE=INNODB;
