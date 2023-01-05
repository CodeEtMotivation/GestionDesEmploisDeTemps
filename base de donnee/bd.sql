CREATE DATABASE timesoft ;
USE timesoft;
CREATE TABLE salle(
id_salle int primary key auto_increment,
intitule varchar(255));

CREATE TABLE users(
id_users int primary key auto_increment,
nom varchar(255),
prenom varchar(255),
login varchar(255),
password varchar(255),
role varchar(255));

CREATE TABLE filiere(
id_filiere int primary key auto_increment,
intitule varchar(255));

CREATE TABLE niveau(
id_niveau int primary key auto_increment,
intitule varchar(255));

CREATE TABLE specialite(
id_specialite int primary key auto_increment,
intitule varchar(255),
id_filiere int,
FOREIGN KEY(id_filiere) REFERENCES filiere(id_filiere));

CREATE TABLE classe(
id_classe int primary key auto_increment,
intitule varchar(255),
id_specialite int,
id_niveau int,
FOREIGN key(id_specialite) REFERENCES specialite(id_specialite),
FOREIGN key(id_niveau) REFERENCES niveau(id_niveau));

CREATE TABLE matiere(
id_matiere int primary key auto_increment,
intitule varchar(255));

CREATE TABLE contenir(
id_contenir int primary key auto_increment,
id_classe int,
id_matiere int,
FOREIGN key(id_classe) REFERENCES classe(id_classe),
FOREIGN key(id_matiere) REFERENCES matiere(id_matiere));

CREATE TABLE enseignant(
id_enseignant int primary key auto_increment,
nom varchar(255),
prenom varchar(255),
sexe varchar(255),
telephone varchar(255),
email varchar(255));

CREATE TABLE annee_scolaire(
id_annee_scolaire int primary key auto_increment,
intitule varchar(255),
id_matiere int,
id_enseignant int,
FOREIGN key(id_enseignant) REFERENCES enseignant(id_enseignant),
FOREIGN key(id_matiere) REFERENCES matiere(id_matiere));

CREATE TABLE emploi(
id_emploi int primary key auto_increment,
semaine varchar(255),
jour varchar(255),
horaire varchar(255),
intitule_matiere varchar(255),
intitule_enseignant varchar(255), 
id_salle int,
id_classe int,
id_users int,
FOREIGN key(id_salle) REFERENCES salle(id_salle),
FOREIGN key(id_classe) REFERENCES classe(id_classe),
FOREIGN key(id_users) REFERENCES users(id_users));