drop database if exists entrevista;
create database entrevista;
use entrevista;


create table Perguntas (
id            int primary key auto_increment,
nome          varchar(100),
idade         int,
pergunta1     varchar(500),
pergunta2     varchar(500),
pergunta3     varchar(500),
pergunta4     varchar(500),
pergunta5     varchar(500),
pergunta6     varchar(500)
);