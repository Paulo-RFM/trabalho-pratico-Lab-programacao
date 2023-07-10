CREATE SCHEMA eventofacildb;

CREATE TABLE eventofacildb.usuario (
    id int not NULL auto_increment primary key,
    nome varchar(50),
    email varchar(60),
    senha varchar(20)
);

CREATE TABLE eventofacildb.evento (
    id int primary key not null,
    nome varchar(50),
    descricao varchar(100),
    dataEvento date,
    data date,
    categoria varchar(20),
    preco int,
    path text
);

CREATE TABLE eventofacildb.registrations (
    id int primary key not NULL,
    usuario varchar(50),
    evento varchar(50),
    pagamento int,
    vendedor int 
);

CREATE TABLE eventofacildb.reviews (
    id int not null auto_increment,
    comentario varchar(200),
    avaliacao int,
    usuario varchar(50),
    evento varchar(50),

);

CREATE TABLE eventofacildb.categories (
    id int not null auto_increment,
    categoria varchar(40)    
);
