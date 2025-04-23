create database if not exists pruebas;
use pruebas;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT auto_increment primary key,
    Nombre varchar (100),
    correo varchar(100),
    creado_en DATETIME DEFAULT CURRENT_TIMESTAMP
);