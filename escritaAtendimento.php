<?php
   //Essa função tem por objetivo controlar a inserção dos registros feitos a partir do index.php
   function inserirRegistrosAtendimento(){
      include("conexaoBanco.php");

      $idUsuario = 1;             // Id do usuário cadastrado no sistema
      $cartId = 1;                // cartorio para o qual foi feito o atendimento
      $descAtdm;                  // Descricao do atendimento
      $statusAtdm = "Pendente";   // Status do atendimento (default Pendente)
      $dataAtdm = new DateTime(); // Data do atendimento (data atual)
      $dataAtual = $dataAtdm->format('y-m-d H:i:s');

      //verificar se o campo esta vazio e realizar validacao
      if(isset($_POST['btnSalvar'])){
         $descAtdm = $_POST['descAtdm'];
      }else{
         $descAtdm = "";
      }

      //SQL: insercao na tabela
      $sql = "INSERT INTO atendimento VALUES (null, '$descAtdm', '$dataAtual', '$statusAtdm', $idUsuario, $cartId) ;";
      mysqli_query($conn, $sql);

      //retornar para o index.php
      header('location: index.php');
   }

   inserirRegistrosAtendimento();
?>
