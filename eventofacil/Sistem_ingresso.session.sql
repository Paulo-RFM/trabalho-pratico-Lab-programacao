CREATE SCHEMA EventManagement;

CREATE TABLE EventManagement.users (
    ID int not NULL auto_increment primary key,
    nome varchar(50),
    email varchar(60),
    senha varchar(20),
    tipo varchar(15)
);

CREATE TABLE EventManagement.events (
    ID int primary key not null,
    titulo varchar(50),
    descricao varchar(100),
    epoca date,
    hora varchar(5),
    categoria varchar(20),
    preco int,
    OID img
);

CREATE TABLE EventManagement.registrations (
    ID int primary key not NULL,
    usuario varchar(50),
    evento varchar(50),
    pagamento int,
    vendedor int 
);

CREATE TABLE EventManagement.reviews (
    ID int not null auto_increment,
    comentario varchar(200),
    avaliacao int,
    usuario varchar(50),
    evento varchar(50),

);

CREATE TABLE EventManagement.categories (
    ID int not null auto_increment,
    categoria varchar(40)    
);
