DROP DATABASE `ESICAD_TP3_bibliotheque`;
CREATE DATABASE IF NOT EXISTS `ESICAD_TP3_bibliotheque`;
USE `ESICAD_TP3_bibliotheque`;

CREATE TABLE abonne(
   matricule_abonne INT AUTO_INCREMENT,
   nom_abonne VARCHAR(50),
   date_naissance_abonne DATE,
   date_adhesion_abonne DATE,
   adresse_abonne VARCHAR(150),
   telephone_abonne CHAR(10),
   CSP_abonne VARCHAR(15),
   PRIMARY KEY(matricule_abonne)
);

CREATE TABLE livre(
   code_catalogue CHAR(13),
   titre_livre VARCHAR(100) NOT NULL,
   theme_livre VARCHAR(50),
   PRIMARY KEY(code_catalogue)
);

CREATE TABLE motcle(
   id_motCle INT AUTO_INCREMENT,
   motCle VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_motCle)
);

CREATE TABLE auteur(
   id_auteur INT AUTO_INCREMENT,
   nom_auteur VARCHAR(150) NOT NULL,
   PRIMARY KEY(id_auteur)
);

CREATE TABLE exemplaire(
   cote_exemplaire INT AUTO_INCREMENT,
   nom_editeur VARCHAR(150) NOT NULL,
   code_usure VARCHAR(15),
   date_acquisition DATE,
   emplacement_rayon VARCHAR(50),
   code_catalogue CHAR(13) NOT NULL,
   PRIMARY KEY(cote_exemplaire),
   FOREIGN KEY(code_catalogue) REFERENCES Livre(code_catalogue)
);

CREATE TABLE ecrit(
   code_catalogue CHAR(13),
   id_auteur INT,
   PRIMARY KEY(code_catalogue, id_auteur),
   FOREIGN KEY(code_catalogue) REFERENCES Livre(code_catalogue),
   FOREIGN KEY(id_auteur) REFERENCES Auteur(id_auteur)
);

CREATE TABLE Associe(
   code_catalogue CHAR(13),
   id_motCle INT,
   PRIMARY KEY(code_catalogue, id_motCle),
   FOREIGN KEY(code_catalogue) REFERENCES Livre(code_catalogue),
   FOREIGN KEY(id_motCle) REFERENCES MotCle(id_motCle)
);

CREATE TABLE emprunte(
   matricule_abonne INT,
   cote_exemplaire INT,
   date_emprunt DATE,
   date_retour DATE,
   estRenouvele BOOLEAN,
   PRIMARY KEY(cote_exemplaire, date_emprunt),
   FOREIGN KEY(matricule_abonne) REFERENCES Abonné(matricule_abonne),
   FOREIGN KEY(cote_exemplaire) REFERENCES Exemplaire(cote_exemplaire)
);

CREATE TABLE Demande(
   matricule_abonne INT,
   code_catalogue CHAR(13),
   date_demande DATE NOT NULL,
   PRIMARY KEY(matricule_abonne, code_catalogue),
   FOREIGN KEY(matricule_abonne) REFERENCES Abonné(matricule_abonne),
   FOREIGN KEY(code_catalogue) REFERENCES Livre(code_catalogue)
);
