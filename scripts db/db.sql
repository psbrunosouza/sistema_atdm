CREATE DATABASE dbAtdm;
USE dbAtdm;

CREATE TABLE atdm(
	codAtdm int not null auto_increment,
    descAtdm text not null,
    dataAtdm date not null,
    codStatus int not null,
    codUsuario int not null,
    primary key(codAtdm),
    foreign key(codStatus) references statusAtdm(codStatus),
    foreign key(codPerfil) references perfil(codPerfil)
);

