create database cliente;
use cliente;

create table usuario (
id int (15) primary key AUTO_INCREMENT not null,
nombre text (20) not null,
apellido text (20) not null,
correo varchar (20) not null,
numero varchar (20) not null,
comentario varchar (20) not null
);