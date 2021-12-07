DROP DATABASE IF EXISTS sbateliers ;
CREATE DATABASE sbateliers ;

USE sbateliers ;

create table Client(
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
	mdp varchar(30),
	primary key (numero)
);

create table Atelier(
	numero int auto_increment,
	date_enregistrement date,
	date_et_heure_programmees datetime,
	duree time,
	nombre_de_places int,
	theme varchar(20),
	primary key(numero)
);

create table Participation(
	numeroAtelier int,
	date_inscription date,
	numero_Client int,
	foreign key ( numeroAtelier ) references Atelier(numero) 
	on update cascade
	on delete cascade,
	foreign key ( numero_Client ) references Client(numero) 
	on update cascade
	on delete cascade,
	primary key (numeroAtelier)
);

insert into Atelier(date_enregistrement,date_et_heure_programmees,duree,nombre_de_places,theme) values ('2019-08-02','2019-09-22 15:30:00','01:30:00',20,'karting');
insert into Atelier(date_enregistrement,date_et_heure_programmees,duree,nombre_de_places,theme) values ('2019-12-07','2020-02-12 14:30:00','03:30:00',10,'bowling');
insert into Atelier(date_enregistrement,date_et_heure_programmees,duree,nombre_de_places,theme) values ('2019-06-24','2019-07-24 10:30:00','03:0:0',31,'plage');
insert into Atelier(date_enregistrement,date_et_heure_programmees,duree,nombre_de_places,theme) values ('2018-09-24','2018-09-24 22:21:20','02:20:20',65,'acrobranche');
