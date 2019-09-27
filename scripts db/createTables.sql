CREATE DATABASE dbAtdm;
USE dbAtdm;

CREATE TABLE atdm(
	codAtdm int not null auto_increment,
    descAtdm text not null,
    dataAtdm datetime not null,
    codStatus int not null,
    codUsuario int not null,
    codPerfil int not null,
    primary key(codAtdm),
    foreign key(codStatus) references statusAtdm(codStatus),
    foreign key(codPerfil) references perfil(codPerfil)
);

CREATE TABLE statusAtdm(
	codStatus int not null auto_increment,
    tipoStatus varchar(30),
    primary key(codStatus)
);

CREATE TABLE perfil(
	codPerfil int not null auto_increment,
	tipoPerfil enum("C", "I", "A") not null,
    nomePerfil varchar(30),
	primary key(codPerfil)
);

CREATE TABLE confirmacao(
	codConfirmacao int not null auto_increment,
    arquivo varchar(30) not null,
    dataArquivo date not null,
    ibgeNum varchar(30) not null,
    primary key(codConfirmacao)
);

CREATE TABLE retorno(
	codRetorno int not null auto_increment,
    nossoNumero varchar(30) not null,
    contaContrato varchar(30) not null,
    arqProtocolo varchar(30) not null,
    dataProtocolo date not null,
    primary key(codRetorno)
);

CREATE TABLE daje(
	codDaje int not null auto_increment,
    arquivo varchar(30) not null,
    dataArquivo date not null,
    arqProtocolo varchar(30) not null,
    dataProtocolo date not null,
    documentoDevedor varchar(30) not null,
    valorTitulo int,
    primary key(codDaje)
);

CREATE TABLE daje_conf_ret(
	codUsuario int not null,
    codDaje  int not null,
    codConfirmacao int not null,
    codRetorno int not null,
    primary key(codUsuario, codDaje, codConfirmacao, codRetorno)
);


