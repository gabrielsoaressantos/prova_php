create database pweb;

use database pweb;

create table usuarios (
    login varchar(100) not null,
    nome varchar(100) not null,
    senha varchar(100) not null
);

insert into usuarios (nome, login, senha) values ('gabriel soares', 'gabs', '123');