CREATE DATABASE proyecto_basico;
USE proyecto_basico;

CREATE TABLE personas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    apellido VARCHAR(100),
    email VARCHAR(150),
    telefono VARCHAR(20),
    fecha_nacimiento DATE
);