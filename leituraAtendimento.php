<?php
   function lerRegistrosAtendimento(){
      include("conexaoBanco.php");

      $sql = " SELECT usr.nome as 'usuarioNome', atdm.protocolo as 'atdmProtocolo', cart.nome as 'cartorio',
      atdm.descricao as 'atdmDescricao', atdm.dataAtdm as 'atdmData', atdm.statusAtdm as 'atdmStatus'
               FROM usuario as usr
               INNER JOIN atendimento as atdm on usr.idUsuario = atdm.idUsuario
               INNER JOIN cartorio as cart on atdm.idCartorio = cart.id";

      return $dados_atendimento = mysqli_query($conn, $sql);
   }
?>
