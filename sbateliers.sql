
DROP DATABASE IF EXISTS sbateliers ;
CREATE DATABASE sbateliers ;

USE sbateliers ;

create table client(
        numero int auto_increment not null,
        civilite varchar(10),
        nom varchar(30),
        prenom varchar(30),
        date_de_naissance date,
        adresse_electronique varchar(40),
        mot_de_passe varchar(20),
        adresse_postale varchar(30),
        code_postale int,
        ville varchar(30),
        numero_de_mobile int,
        primary key(numero)
);

create table Responsable_ateliers(
        numero int auto_increment,
        nom_de_connexion varchar(30),
        nom varchar(30),
        prenom varchar(30),
        primary key (numero)
);

create table Atelier(
        numero int auto_increment,
        date_enregistrement date,
        date_et_heure_programmees date,
        duree time,
        nombre_de_places int,
        theme varchar(20),
        primary key(numero)
);

create table Participation(
        numeroAtelier int,
        date_inscription date,
        foreign key ( numeroAtelier ) references Atelier(numero) 
        on update cascade
        on delete cascade,
        primary key (numeroAtelier)
);

