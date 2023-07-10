CREATE SCHEMA eventofacildb;

CREATE TABLE eventofacildb.usuario (
    ID int not NULL auto_increment primary key,
    nome varchar(50),
    email varchar(60),
    senha varchar(20),
    tipo varchar(15)
);

CREATE TABLE eventofacildb.evento (
    ID int primary key not null,
    titulo varchar(50),
    descricao varchar(100),
    epoca date,
    hora varchar(5),
    categoria varchar(20),
    preco int,
    OID img
);

CREATE TABLE eventofacildb.registrations (
    ID int primary key not NULL,
    usuario varchar(50),
    evento varchar(50),
    pagamento int,
    vendedor int 
);

CREATE TABLE eventofacildb.reviews (
    ID int not null auto_increment,
    comentario varchar(200),
    avaliacao int,
    usuario varchar(50),
    evento varchar(50),

);

CREATE TABLE eventofacildb.categories (
    ID int not null auto_increment,
    categoria varchar(40)    
);
