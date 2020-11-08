create database aerovionics
use aerovionics
create table Usuario
(
Id_Usuario integer primary key not null,
Correo varchar(40),
Contraseña varchar(10)
)
create table Administrador
(
Id_Administrador integer primary key not null,
Nombre varchar(40),
Apellido varchar(40),
Id_Usuario int,
Tipo_Usuario varchar (40),
Nombre_Usuario varchar(40),
Apellido_Usuario varchar(40)
)
create table Analista
(
Id_Analista integer primary key not null,
Nombre varchar(40),
Apellido varchar(40),
Tipo_Usuario varchar (30)
)
create table Gerente
(
Id_Gerente integer primary key not null,
Nombre varchar(40),
Apellido varchar(40),
Tipo_Usuario varchar (30)
)