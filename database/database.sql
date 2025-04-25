DROP DATABASE IF EXISTS arenalimanorte;
CREATE DATABASE arenalimanorte;
use arenalimanorte;


CREATE TABLE usuarios
(
	idusuario	INT AUTO_INCREMENT PRIMARY KEY,
    email		varchar(80) not null,
    nom_usuario VARCHAR(30) NOT NULL,
    claveacceso VARBINARY(255) not null
)ENGINE=INNODB;

CREATE TABLE eventos
(
	idevento 	int auto_increment primary key,
	imagen		varchar(40) not null,
    link		varchar(120) not null
)ENGINE = INNODB;

CREATE TABLE experiencias
(
	idexperiencia	int auto_increment primary key,
    imagen			varchar(40) not null
)ENGINE = INNODB;

