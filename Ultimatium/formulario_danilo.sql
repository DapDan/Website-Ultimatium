create database formulario_danilo;
use formulario_danilo;
create table usuarios(
    id int not null auto_increment,
    nome varchar(45) not null,
    email varchar(110) not null,
    senha varchar(45) not null,
    confi_senha varchar(45) not null,
    primary key(id)
);

insert into usuarios
(id, nome, email, senha, confi_senha)
values
(default, 'root', 'admin@admin.com','hello','hello');