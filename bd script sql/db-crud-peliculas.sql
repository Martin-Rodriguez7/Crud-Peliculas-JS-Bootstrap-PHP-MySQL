/*
-- CREA LA TABLA GENERO
CREATE TABLE genero(
    id integer auto_increment PRIMARY KEY,
    nombre VARCHAR(50)
);
/*
-- CREA LA TABLA PELICULAS
CREATE TABLE pelicula(
    id integer auto_increment PRIMARY KEY,
    nombre VARCHAR(50),
	descripcion VARCHAR(50),
    idgenero int,
    fecha_alta datetime
);
/*
-- AGREGAR LA FOREING KEY A LA TABLA CREADA (GENERO)
ALTER TABLE pelicula
ADD FOREIGN KEY (idgenero) REFERENCES genero(id);
/* 
 AGREGAR VALORES A LA TABLA GENERO
INSERT INTO genero (nombre) VALUES ("Terror");
INSERT INTO genero (nombre) VALUES ("Comedia");
INSERT INTO genero (nombre) VALUES ("Accion");
INSERT INTO genero (nombre) VALUES ("Dibujos Animados");
*/