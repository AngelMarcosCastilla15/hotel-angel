CREATE DATABASE hoteldb;
USE hoteldb;

CREATE TABLE personas
(
	idpersona			INT AUTO_INCREMENT PRIMARY KEY,
	nombres				VARCHAR(50) NOT NULL,
	apellidos			VARCHAR(70) NOT NULL,
	celular 				CHAR(9) NULL,
	dni					CHAR(8) NOT NULL,
	
	CONSTRAINT uk_dni_personas UNIQUE(dni)
	
)ENGINE=INNODB;

CREATE TABLE usuarios (
	idusuario			INT AUTO_INCREMENT PRIMARY KEY ,
	idpersona			INT NOT NULL,
	nombreusuario		VARCHAR(50) NOT NULL,
	claveacceso			VARCHAR(90) NOT NULL,
	email					VARCHAR(90)NOT NULL,
	
	CONSTRAINT uk_nombreusuario_usuario UNIQUE(nombreusuario),
	CONSTRAINT fk_idpersona_usuario FOREIGN KEY (idpersona) REFERENCES personas(idpersona)
)ENGINE=INNODB;

CREATE TABLE servicios
(
	idservicio			INT AUTO_INCREMENT PRIMARY KEY,
	nombreservicio		VARCHAR(50),
	descripcion			VARCHAR(300),
	
	CONSTRAINT uk_nombreservicio_personas UNIQUE(nombreservicio)
)ENGINE=INNODB;

CREATE TABLE clasificaciones(
	idclasificacion			INT AUTO_INCREMENT PRIMARY KEY,
	nombreclasificacion 		VARCHAR(90) NOT NULL,
	cantidadPersona			TINYINT NOT NULL,
	CONSTRAINT uk_nombre_clasificaciones UNIQUE (nombreclasificacion)
)ENGINE=INNODB;

/*inserciones de datos*/
INSERT INTO personas(nombres, apellidos, dni, celular)
VALUES('ANGEL', 'MARCOS CASTILLA', '73963911', NULL);

/*1-6*/
INSERT INTO usuarios(idpersona, nombreusuario, claveacceso, email)
VALUES (1,'angeluser','$2y$10$XaESoYZS6kBEl6LZy2ilOudXWLpUd7O9GUJL/ie88ALXM3DaP3wb2','angelmarcoscastilla15@gmail.com');


/*PROCEDIMIENTOS ALMACENADOS*/
DELIMITER $$
CREATE PROCEDURE spu_usuarios_login (IN _nombreusuario VARCHAR(30))
BEGIN
SELECT  
	personas.nombres, personas.apellidos,
	usuarios.idusuario,
	usuarios.nombreusuario, usuarios.claveacceso, usuarios.email
	FROM usuarios
	INNER JOIN personas ON personas.idpersona = usuarios.idpersona
	WHERE nombreUsuario = _nombreusuario;
END $$
