
CREATE DATABASE IF NOT EXISTS myprojetred;

CREATE TABLE IF NOT EXISTS PHOTOS 
(

    idrecette INT primary key,
    titre VARCHAR(255) NOT NULL,
    legend TEXT NOT NULL,
    photo VARCHAR(255) NOT NULL,
    tag VARCHAR(255) NOT NULL,

)

INSERT INTO PHOTOS (titre,legend,photo,tag)VALUES("Forspoken","Description","FORSPOKEN_LOGO_.png","Playstation")
