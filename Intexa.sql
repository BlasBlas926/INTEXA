CREATE DATABASE Intexa;
USE Intexa;

CREATE TABLE Roles(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  role VARCHAR(20) NOT NULL
);

CREATE TABLE Usuario(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Nombre VARCHAR(100) NOT NULL,
  Apellidos VARCHAR(200) NOT NULL,
  Direccion VARCHAR(100) NOT NULL,
  Edad INT NOT NULL,
  Usuario VARCHAR(20) NOT NULL,
  Email VARCHAR(100) NOT NULL,
  Telefono INT NOT NULL,
  Pwd VARCHAR(20) NOT NULL,
  fechaAlta DATETIME NOT NULL,
  roleId INT NOT NULL,	
  CONSTRAINT fk_usuario_role FOREIGN KEY (roleId) REFERENCES Roles(id)
);

CREATE TABLE Anaquel(
id_Anaquel INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
Zona VARCHAR(20) NOT NULL
);

CREATE TABLE Avios(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
id_Anaquel INT NOT NULL,
Item VARCHAR(20) NOT NULL,
Avio VARCHAR(20) NOT NULL,
Descripcion VARCHAR(200) NOT NULL,
Anaquel VARCHAR(20) NOT NULL,
Cantidad INT NOT NULL,
Stock INT NOT NULL,
Color VARCHAR(20) NOT NULL,
Image LONGBLOB,
Fecha DATE,
constraint fk_Anaquel FOREIGN KEY(id_Anaquel) references Anaquel(id_Anaquel)
);

CREATE TABLE Utensilios(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
id_Anaqueles INT NOT NULL,
itemU VARCHAR(20) NOT NULL,
AvioU VARCHAR(50) NOT NULL,
Anaquel VARCHAR(20) NOT NULL,
Prestamo INT NOT NULL,
Solicitante VARCHAR(100) NOT NULL,
FechaP DATETIME NOT NULL,
CONSTRAINT FOREIGN KEY(id_Anaqueles) references Anaquel(id_Anaquel)
);


INSERT INTO Roles (role) VALUES ('Administrador');
INSERT INTO Usuario  VALUES (0,'Oswaldo', 'Salazar Aburto', 'Xiutetelco Pue', 22, 'Admin', 'oswaldo@gmail.com', 1224578888, 'admin12',now(), 1);

Select *from Usuario;

Select *from Anaquel;
Select *from Avios;

update Usuario
set Usuario="admin" where id=1;

delete from Usuario Where id=1;

select *from Usuario Where id=2;

select *from Usuario where id>=2;

alter table Usuario add Ubicacion varchar(20);

update Usuario 
set PWd="admin" where id=2;
update Usuario
set Ubicacion="Mexico" where id=2;
select Nombre,Apellidos,Pwd from Usuario where Pwd="admin"
