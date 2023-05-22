CREATE DATABASE hoteldb;
USE hoteldb;

CREATE TABLE personas
(
	idpersona			INT AUTO_INCREMENT PRIMARY KEY,
	nombres				VARCHAR(50) NOT NULL,
	apellidos			VARCHAR(70) NOT NULL,
	celular 				CHAR(9) NOT NULL,
	dni					CHAR(8) NOT NULL,
	
	CONSTRAINT uk_dni_personas UNIQUE(dni)
	
)ENGINE=INNODB;

CREATE TABLE usuarios (
	idusuario			INT AUTO_INCREMENT PRIMARY KEY ,
	nombreusuario		VARCHAR(50) NOT NULL,
	claveacceso			VARCHAR(90) NOT NULL,
	
	CONSTRAINT uk_nombreusuario_personas UNIQUE(nombreusuario)
)ENGINE=INNODB;

CREATE TABLE servicios
(
	idservicio			INT AUTO_INCREMENT PRIMARY KEY,
	nombreservicio		VARCHAR(50),
	descripcion			VARCHAR(300),
	
	CONSTRAINT uk_nombreservicio_personas UNIQUE(nombreservicio)
)ENGINE=INNODB;


