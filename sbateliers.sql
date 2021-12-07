drop database if exists sbateliers;
create database sbateliers;

use sbateliers;


drop table if exists Client;

create table Client(
	numero int primary key auto_increment,
	civilite varchar(8),
	nom varchar(30),
	prenom varchar(30),
	date_de_naissance date,
	email varchar(50) unique,
	mdp varchar(30),
	adresse varchar(50),
	code_postal int,
	ville varchar(20),
	numero_tel int
);


create table Responsable_Atelier(
	numero int,
	nom_de_connexion varchar(40),
	nom varchar(30),
	prenom varchar(30),
	mdp varchar(40)
);


create table Atelier(
	numero int primary key,
	date_enregistrement date,
	date_et_heure_prevue datetime,
	duree time,
	nb_places int,
	theme varchar(70)
);


create table Participation(
	numero_atelier int,
	numero_client int,
	date_inscription date,
	foreign key (numero_atelier) references Atelier(numero)
	on update cascade
	on delete cascade,
	foreign key (numero_client) references Client(numero)
	on update cascade
	on delete cascade,
	primary key (numero_atelier, numero_client)
	
);


insert into Atelier(numero,date_enregistrement,date_et_heure_prevue,duree,nb_places,theme) values (1,'2019-08-02','2019-09-22 15:30:00','01:30:00',20,'karting');
insert into Atelier(numero,date_enregistrement,date_et_heure_prevue,duree,nb_places,theme) values (2,'2019-12-07','2020-02-12 14:30:00','03:30:00',10,'bowling');
insert into Atelier(numero,date_enregistrement,date_et_heure_prevue,duree,nb_places,theme) values (3,'2019-06-24','2019-07-24 10:30:00','03:0:0',31,'plage');
insert into Atelier(numero,date_enregistrement,date_et_heure_prevue,duree,nb_places,theme) values (4,'2018-09-24','2018-09-24 22:21:20','02:20:20',65,'acrobranche');
