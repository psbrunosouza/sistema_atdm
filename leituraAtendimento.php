<?php
   function lerRegistrosAtendimento(){
      include("conexaoBanco.php");

      $sql = "SELECT
      a.nomePerfil as 'Apresentante',
      atdm.codAtdm as 'Protocolo',
      c.nomePerfil as 'Cartorio',
      atdm.descAtdm as 'Descricao',
      atdm.dataAtdm as 'Data atendimento',
      s.tipoStatus as 'Status',
      u.nomePerfil as 'Usuario'
      FROM apresentante as a
      INNER JOIN atendimento as atdm on a.codApresentante = atdm.codApresentante
      INNER JOIN cartorio as c on c.codCartorio = atdm.codCartorio
      INNER JOIN statusatdm as s on s.codStatus = atdm.codStatus
      INNER JOIN cra as u on u.codCra = atdm.codAtdm;";

      return $dados_atendimento = mysqli_query($conn, $sql);
   }
?>
