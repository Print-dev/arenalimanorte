DROP DATABASE IF EXISTS arenalimanorte;
CREATE DATABASE arenalimanorte;
use arenalimanorte;


CREATE TABLE usuarios
(
	idusuario	INT AUTO_INCREMENT PRIMARY KEY,
    email		varchar(80) not null,
    nom_usuario VARCHAR(30) NOT NULL,
    claveacceso VARBINARY(255) not null,
	estado 		TINYINT NOT NULL DEFAULT 1 -- 1=activo, 2=baja/inactivo/suspendido/baneado/inhabilitado

)ENGINE=INNODB;

insert into usuarios (email, nom_usuario, claveacceso, estado) values ('royer.190818@gmail.com', 'royer', '$2y$10$M7iFTSZbB5B/jUcwLz06VuH6u9cnsoZEr7p34mxfsWdxQ6dojcuUO', 1);

CREATE TABLE eventos
(
	idevento 	int auto_increment primary key,
	imagen		varchar(40) not null, -- url de la image n
    link		varchar(120) not null, -- link del altoketike segun evento
    presentado		tinyint not null -- 0: mostrar, 1: ocultar
)ENGINE = INNODB;

CREATE TABLE experiencias
(
	idexperiencia	int auto_increment primary key,
    imagen			varchar(40) not null
)ENGINE = INNODB;

