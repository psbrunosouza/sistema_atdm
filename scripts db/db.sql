create table atendimento(
	protocolo int not null auto_increment,
    descricao text not null,
    dataAtdm dateTime not null,
    statusAtdm enum("Concluido", "Pendente", "Chamado TI", "Reaberto") not null,
    idUsuario int not null,
    primary key(protocolo),
    foreign key(idUsuario) references usuario(idUsuario)
);

create table usuario(
	idUsuario int not null auto_increment primary key,
    nome varchar(100) not null 
);

create table cartorio(
	id int not null auto_increment primary key,
    nome varchar(100) not null 
);

select * from atendimento;

insert into atendimento values (null, "Ninguem sabe ninguem viu", "2019-09-23 23:46:00", "Pendente", 2);
insert into usuario values (null, "Alex");

SELECT u.nome, a.protocolo, a.descricao, a.dataAtdm, a.statusAtdm FROM usuario as u
                        INNER JOIN atendimento as a on a.idUsuario = u.idUsuario ;
