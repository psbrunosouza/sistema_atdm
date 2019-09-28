select * from apresentante;
select * from atendimento;
select * from retorno;
select * from daje;
select * from cra;
select * from confirmacao;
select * from cartorio;
select * from statusAtdm;

select a.nomePerfil as 'Apresentante', c.arquivo as 'Remessa', c.dataArquivo as 'Data da remessa',
c.ibgeNum as 'Numero IBGE', datediff(now(), c.dataArquivo) as 'Dias pendentes' from 
apresentante as a inner join confirmacao as c on a.codApresentante = c.codApresentante;

select a.nomePerfil as 'Apresentante', r.nossoNumero as 'Nosso numero', r.contaContrato as 'Conta contrato',
r.arqProtocolo as 'Protocolo', r.dataProtocolo as 'Data do protocolo', c.dataArquivo as 'Data confirmacao', datediff(now(), r.dataProtocolo) as 'Dias pendentes' from 
apresentante as a inner join retorno as r on a.codApresentante = r.codApresentante inner join confirmacao as c 
on c.codApresentante = a.codApresentante;

select a.nomePerfil as 'Apresentante', d.arquivo as 'Arquivo', d.dataArquivo as 'Data do arquivo',
d.arqProtocolo as 'Protocolo', d.dataProtocolo as 'Data do protocolo', d.documentoDevedor as 'Documento do devedor', d.valorTitulo as 'Valor do titulo', datediff(now(), d.dataProtocolo) as 'Dias pendentes' from 
apresentante as a inner join daje as d on a.codApresentante = d.codApresentante;

SELECT atdm.codAtdm as 'Protocolo', c.nomePerfil as 'Cartorio',
      atdm.descAtdm as 'Descricao', atdm.dataAtdm as 'Data atendimento', s.tipoStatus as 'Status', u.nomePerfil as "Usuario"
      FROM atendimento as atdm
      INNER JOIN cartorio as c on c.codCartorio = atdm.codCartorio
      INNER JOIN statusatdm as s on s.codStatus = atdm.codStatus
      INNER JOIN cra as u on u.codCra = atdm.codAtdm;
      
SELECT * from atendimento;
      
INSERT INTO atendimento VALUES(null,"Sggg", "2019-06-15",  2, 1, 1, 1);