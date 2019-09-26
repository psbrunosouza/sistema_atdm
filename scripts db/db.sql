create database dbAtdm;
use dbAtdm;

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

create table confirmacao(
	idconfirmacao int auto_increment not null primary key,
    nomeconfirmacao varchar(20) not null,
    dataconfirmacao date not null,
    numIbge varchar(20) not null
);

create table retorno(
	idRetorno int auto_increment not null primary key,
    nossoNumero varchar(20) not null,
    contaContrato varchar(30) not null,
    protocolo varchar(30) not null,
    dataProtocolo date not null,
    dataConfirmacao date not null
);



create table apresentante(
	idApresentante int auto_increment not null primary key,
    nomeApresentante varchar(20)
);

create table daje(
	idDaje int auto_increment not null primary key,
	arquivo varchar(20) not null,
    dataArquivo date not null,
    protocolo varchar(30) not null,
    dataProtocolo date not null,
    documentoDevedor varchar(20)not null,
    valorTitulo decimal(10,2)
);

create table cartorioToApresentante(
	idCartorio int not null,
    idApresentante int not null,
	foreign key(idCartorio) references cartorio(id),
    foreign key(idApresentante) references apresentante(idApresentante)
);

insert into confirmacao values(null, "B9002505.191", "2019-10-15", "20090010", 1);

insert into retorno values(null,
    "433355566",
    "234346666633",
    "1122000002",
    "2019-10-12",
     "2019-10-12",
     1);
     
insert into daje values( null,
	"R9002005.191",
    "2019-10-12",
    "1122000002",
    "2019-10-12",
    "1234567890",
    "245.59",
    1);

DESC daje;

ALTER TABLE daje
add column idCartorio int not null;

ALTER TABLE daje
add foreign key(idCartorio) references cartorio(id);

select * from apresentante;

insert into atendimento values (null, "Ninguem sabe ninguem viu", "2019-09-23 23:46:00", "Pendente", 2);
insert into usuario values (2, "Bruno");
insert into cartorio values(null, "Salvador - 1");
insert into apresentante values(null, "coelba");



SELECT u.nome, a.protocolo, a.descricao, a.dataAtdm, a.statusAtdm FROM usuario as u
                        INNER JOIN atendimento as a on a.idUsuario = u.idUsuario ;

ALTER TABLE atendimento
ADD idCartorio int not null;

ALTER TABLE atendimento
ADD foreign key (idCartorio) references cartorio(id);

SELECT usr.nome as 'usuarioNome', atdm.protocolo as 'atdmProtocolo', cart.nome as 'cartorio',
      atdm.descricao as 'atdmDescricao', atdm.dataAtdm as 'atdmData', atdm.statusAtdm as 'atdmStatus'
               FROM usuario as usr
               INNER JOIN atendimento as atdm on usr.idUsuario = atdm.idUsuario
               INNER JOIN cartorio as cart on atdm.idCartorio = cart.id;

desc cartorio;

SELECT a.nomeApresentante as 'apresentante', c.nomeConfirmacao as 'remessa', 
c.dataconfirmacao as "dataConf", c.numIbge as "numIbge", datediff(now(), c.dataconfirmacao) as "diasPendentes" FROM confirmacao c 
INNER JOIN cartorio cart on c.idConfirmacao = cart.id
INNER JOIN cartorioToApresentante cta on cta.idCartorio = cart.id
INNER JOIN apresentante a on a.idApresentante = cta.idApresentante;

select * from confirmacao;