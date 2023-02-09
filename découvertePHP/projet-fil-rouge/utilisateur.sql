

CREATE TABLE IF NOT EXISTS UTILISATEURS 
(

    id INT primary key AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL

);

INSERT INTO UTILISATEURS (nom,prenom)VALUES
(1, 'Dylan', 'Kirsch'),
(2, 'BRU', 'Thierry');