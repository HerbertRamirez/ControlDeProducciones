CREATE DATABASE ControlSeries
USE ControlSeries;

CREATE table Producciones(
id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY;
Nombre varchar(200);
Pertenencia INTEGER);

INSERT INTO Producciones(id,Nombre, Pertenencia)
VALUES(NULL, 'The walking dead 2', 01),
(NULL, 'The walking dead 1', 00),
(NULL, 'Juego de tronos 4', 11),
(NULL, 'The walking dead 3', 01),
(NULL, 'Pelicula The walking dead 1', 02),
(NULL, 'Juego de tronos 2', 11),
(NULL, 'Juego de tronos 1', 10),
(NULL, 'The walking dead 4', 01),
(NULL, 'Pelicula Juego de tronos 1', 12);

SELECT Nombre ,Pertenencia
FROM producciones
order by Nombre, SUBSTRING(Nombre,LENGTH(Nombre)-1) desc

SELECT DISTINCT Nombre, Pertenencia
FROM producciones
ORDER BY Pertenencia, Nombre