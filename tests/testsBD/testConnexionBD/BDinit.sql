-- Ce fichier sert à initialiser une mini bd test

create table clients (
  id int primary key,
  nom varchar(30),
  sexe char(1)
);

insert into clients VALUES (1,"coco",'H');
insert into clients VALUES (2,"coca",'F');
