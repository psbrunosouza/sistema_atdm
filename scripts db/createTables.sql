CREATE DATABASE dbAtdm;
USE dbAtdm;

CREATE TABLE atendimento(
	codAtdm int not null auto_increment,
    descAtdm text not null,
    dataAtdm datetime not null,
    codStatus int not null,
    codCra int not null,
    codCra int not null,
    primary key(codAtdm),
    foreign key(codStatus) references statusAtdm(codStatus),
    foreign key(codCra) references cra(codCra),
    foreign key(codStatus) references statusAtdm(codStatus)
);

CREATE TABLE statusAtdm(
	codStatus int not null auto_increment,
    tipoStatus varchar(30),
    primary key(codStatus)
);

CREATE TABLE cra(
	codCra int not null auto_increment,
    nomePerfil varchar(30),
	primary key(codCra)
);

CREATE TABLE cartorio(
	codCartorio int not null auto_increment,
    nomePerfil varchar(30),
	primary key(codCartorio)
);

CREATE TABLE apresentante(
	codApresentante int not null auto_increment,
    nomePerfil varchar(30),
	primary key(codApresentante)
);

CREATE TABLE confirmacao(
	codConfirmacao int not null auto_increment,
    arquivo varchar(30) not null,
    dataArquivo date not null,
    ibgeNum varchar(30) not null,
    primary key(codConfirmacao),
    codCra int not null,
    codCartorio int not null,
    codApresentante int not null,
    foreign key(codCra) references cra(codCra),
    foreign key(codCartorio) references cartorio(codCartorio),
    foreign key(codApresentante) references apresentante(codApresentante)
);

CREATE TABLE retorno(
	codRetorno int not null auto_increment,
    nossoNumero varchar(30) not null,
    contaContrato varchar(30) not null,
    arqProtocolo varchar(30) not null,
    dataProtocolo date not null,
    primary key(codRetorno),
    codCra int not null,
    codCartorio int not null,
    codApresentante int not null,
    foreign key(codCra) references cra(codCra),
    foreign key(codCartorio) references cartorio(codCartorio),
    foreign key(codApresentante) references apresentante(codApresentante)
);

CREATE TABLE daje(
	codDaje int not null auto_increment,
    arquivo varchar(30) not null,
    dataArquivo date not null,
    arqProtocolo varchar(30) not null,
    dataProtocolo date not null,
    documentoDevedor varchar(30) not null,
    valorTitulo int,
    primary key(codDaje),
    codCra int not null,
    codCartorio int not null,
    codApresentante int not null,
    foreign key(codCra) references cra(codCra),
    foreign key(codCartorio) references cartorio(codCartorio),
    foreign key(codApresentante) references apresentante(codApresentante)
);

CREATE TABLE usrTemDaje(
	codPerfil int not null,
    codDaje  int not null,
    primary key(codPerfil, codDaje)
);

CREATE TABLE usrTemConfirmacao(
	codPerfil int not null,
    codConfirmacao int not null,
    primary key(codPerfil, codConfirmacao)
);

CREATE TABLE usrTemRetorno(
	codPerfil int not null,
    codRetorno int not null,
    primary key(codPerfil, codRetorno)
);





