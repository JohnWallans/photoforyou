CREATE DATABASE photoforyou_bdd;

USE photoforyou_bdd;

CREATE TABLE UTILISATEUR(IdUser int PRIMARY KEY AUTO_INCREMENT, EmailUser varchar(30), MdpUser varchar(64), NomUser varchar(30), PrenomUser varchar(30));

CREATE TABLE PHOTOGRAPHE(IdPhotographe int, Test int, PRIMARY KEY (IdPhotographe), FOREIGN KEY (IdPhotographe) REFERENCES UTILISATEUR(IdUser));

CREATE TABLE CLIENT(IdClient int, Crédit int, PRIMARY KEY (IdClient), FOREIGN KEY (IdClient) REFERENCES UTILISATEUR(IdUser));

CREATE TABLE ADMINISTRATEUR(IdAdministrateur int, Grade varchar(30), PRIMARY KEY (IdAdministrateur), FOREIGN KEY (IdAdministrateur) REFERENCES UTILISATEUR(IdUser));

INSERT INTO UTILISATEUR(EmailUser, MdpUser) VALUES 
("test1@gmail.com", "1b4f0e9851971998e732078544c96b36c3d01cedf7caa332359d6f1d83567014", "DUJARDIN", "Jean"),
("test2@gmail.com", "60303ae22b998861bce3b28f33eec1be758a213c86c93c076dbe9f558c11c752", "CLAVIER", "Christian"),
("test3@gmail.com", "fd61a03af4f77d870fc21e05e7e80678095c92d808cfb3b5c279ee04c74aca13", "CANET", "Guillaume");


INSERT INTO PHOTOGRAPHE(IdPhotographe, Test) VALUES 
(1, 1234);

INSERT INTO CLIENT(IdClient, Crédit) VALUES
(2, 123343);

INSERT INTO ADMINISTRATEUR(IdAdministrateur, Grade) VALUES
(3, "Modérateur");
