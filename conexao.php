<?php

   $database = "dbatdm";
   $user = "root";
   $password = "";
   $host = "localhost";

   $conn = mysqli_connect($host, $user, $password, $database);

   if(!$conn){
      echo "Falha na conexão: " . mysqli_connect_error();
   }

?>
