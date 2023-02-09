
CREATE DATABASE IF NOT EXISTS myprojetred;

CREATE TABLE IF NOT EXISTS PHOTOS 
(

    id INT primary key AUTO_INCREMENT,
    titre VARCHAR(255) NOT NULL,
    legend TEXT NOT NULL,
    photo VARCHAR(255) NOT NULL,
    tag VARCHAR(255) NOT NULL,

)

INSERT INTO PHOTOS (titre,legend,photo,tag)VALUES("Forspoken","Description","FORSPOKEN_LOGO_.png","Playstation")


DROP TABLE IF EXISTS Utilisateurs;
CREATE TABLE IF NOT EXISTS Utilisateurs
{
    id INT primary key auto_increment,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL
};
INSERT INTO Utilisateurs (nom,prenom)values('Kirsch','Dylan');