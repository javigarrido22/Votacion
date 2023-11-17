 create table usuario (
    Nombre varchar(80) not null,
    alias varchar (30) not null,
    Rut varchar (9) not null primary key,
    email varchar(80) not null,
    region text not null,
    comuna text not null,
    candidato text not null,
    nosotros text not null

 )