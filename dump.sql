-- CREATE BY @Mkgm

DROP TABLE IF EXISTS Visiteur;
CREATE TABLE IF NOT EXISTS Visiteur(
        id_visiteur int not null,
        nom varchar(30),
        email varchar(30),
        commentaire varchar(30),
        PRIMARY KEY(id_visiteur)
);
DROP TABLE IF EXISTS Etudiant;
CREATE TABLE IF NOT EXISTS Etudiant(
        id_Etudiant int NOT NULL PRIMARY KEY,
        nom varchar(255),
        prenom varchar(255),
        ville varchar(100),
        datenaiss date(),
        lieu_naiss varchar(100),
        email varchar(250),
        telephone INT,
        nationalite varchar(100),
        cycle varchar(50),
        filiere varchar(70),

);
DROP TABLE IF EXISTS Actualite;
CREATE TABLE IF NOT EXISTS Actualite(
        description varchar(230),
        dateActu date(),
    )

IF NOT EXISTS(
    CREATE TABLE Newletter(
        
    )
)
IF NOT EXISTS(
    CREATE TABLE User(
        email varchar(30),
        password varchar(30),
    )
)