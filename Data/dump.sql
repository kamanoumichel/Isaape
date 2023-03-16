-- CREATE BY @Mkgm
-- creer la BD isaapeBD puis tu importe

DROP TABLE IF EXISTS Visiteur;
CREATE TABLE IF NOT EXISTS Visiteur(
        id_visiteur int not null,
        nom varchar(30),
        email varchar(30),
        commentaire varchar(30),
        PRIMARY KEY(id_visiteur)
)ENGINE=INNODB;
DROP TABLE IF EXISTS Etudiant;
CREATE TABLE IF NOT EXISTS Etudiant(
        id_Etudiant int NOT NULL,
        nom varchar(255),
        prenom varchar(255),
        ville varchar(100),
        datenaiss date,
        lieu_naiss varchar(100),
        email varchar(250),
        telephone INT,
        nationalite varchar(100),
        cycle varchar(50),
        filiere varchar(70),
        PRIMARY KEY(id_Etudiant)

)ENGINE=INNODB;
DROP TABLE IF EXISTS Actualite;
CREATE TABLE IF NOT EXISTS Actualite(
        id_actu int NOT NULL,
        descriptionA varchar(255),
        nom_fichier varchar(200),
        dateActu date,
        PRIMARY KEY(id_actu)
    )ENGINE=INNODB;

DROP TABLE IF EXISTS Newletter;
CREATE TABLE Newletter(
        id_new int NOT NULL,
        nom varchar(255),
        email varchar(255),
        PRIMARY KEY(id_new)
);

DROP TABLE IF EXISTS  User;
    CREATE TABLE User(
        idUser int not null,
        email varchar(30),
        mot_de_passe varchar(30),
        PRIMARY KEY(idUser)
    )ENGINE=INNODB;

