<?php


      include("conexao.php");

      $idUsuario = 1;
      $descAtdm;
      //$dataAtdm = new DateTime();
      $statusAtdm = "Pendente";

      if(isset($_POST['btnSalvar'])){
         $descAtdm = $_POST['btnSalvar'];
      }else{
         $descAtdm = "";
      }

      $sql = "INSERT INTO atendimento VALUES (null, $descAtdm, '2019-10-12 16:20:00', $statusAtdm, $idUsuario) ;";
      mysqli_query($conn, $sql);

?>
