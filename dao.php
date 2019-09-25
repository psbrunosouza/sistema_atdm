<?php

   //Essa função tem por objetivo controlar a inserção dos registros feitos a partir do index.php

   function inserirRegistroAtendimento(){
      include("conexao.php");

      $idUsuario = 1;             // Id do usuário cadastrado no sistema
      $descAtdm;                  // Descricao do atendimento
      $statusAtdm = "Pendente";   // Status do atendimento (default Pendente)
      $dataAtdm = new DateTime(); // Data do atendimento (data atual)

      //verificar se o campo esta vazio e realizar validacao
      if(isset($_POST['btnSalvar'])){
         $descAtdm = $_POST['descAtdm'];
      }else{
         $descAtdm = "";
      }

      //SQL: insercao na tabela
      $sql = "INSERT INTO atendimento VALUES (null, '$descAtdm', date_format($dataAtdm, 'd/m/Y H:i:s'), '$statusAtdm', $idUsuario) ;";
      mysqli_query($conn, $sql);

      //retornar para o index.php
      header('location: index.php');
   }

   inserirRegistroAtendimento();
?>
