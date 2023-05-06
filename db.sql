drop database if exists bebiImpianti;
create database bebiImpianti;

use bebiImpianti;

create table clienti(
id int not null auto_increment,
email varchar(255),
nomeLocale varchar(255),
via varchar(255),
numeroCivico varchar(255),
comune varchar(255),
provincia varchar(255),
regione varchar(255),
interno varchar(255),

primary key (id)
);

create table assistenza(
id int not null auto_increment,
oggetto varchar(255),
richiesta text,
data date,
idCliente int,

primary key (id),
foreign key(idCliente) references clienti(id)
);


create table utenti(
id int not null auto_increment,
email varchar(255),
password varchar(255),

primary key (id)
);
insert into utenti(email,password)
values ("admin@gmail.com","admin123");
