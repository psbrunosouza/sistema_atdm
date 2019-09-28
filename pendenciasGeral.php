<?php

   function query_confirmacao(){
      include("conexaoBanco.php");

      $sql = "SELECT a.nomePerfil as 'Apresentante', c.arquivo as 'Remessa', c.dataArquivo as 'Data da remessa',
      c.ibgeNum as 'Numero IBGE', datediff(now(), c.dataArquivo) as 'Dias pendentes' from
      apresentante as a inner join confirmacao as c on a.codApresentante = c.codApresentante;";

      return $pendencias_confirmacao = mysqli_query($conn, $sql);
   }

   function query_retorno(){
      include("conexaoBanco.php");

      $sql = "SELECT a.nomePerfil as 'Apresentante', r.nossoNumero as 'Nosso numero', r.contaContrato as 'Conta contrato',
            r.arqProtocolo as 'Protocolo', r.dataProtocolo as 'Data do protocolo', c.dataArquivo as 'Data confirmacao', datediff(now(), r.dataProtocolo) as 'Dias pendentes' from
            apresentante as a inner join retorno as r on a.codApresentante = r.codApresentante inner join confirmacao as c
            on c.codApresentante = a.codApresentante;";

      return $pendencias_retorno = mysqli_query($conn, $sql);
   }

   function query_daje(){
      include("conexaoBanco.php");

      $sql = "SELECT a.nomePerfil as 'Apresentante', d.arquivo as 'Arquivo', d.dataArquivo as 'Data do arquivo',
               d.arqProtocolo as 'Protocolo', d.dataProtocolo as 'Data do protocolo', d.documentoDevedor as 'Documento do devedor', d.valorTitulo as 'Valor do titulo',
               datediff(now(), d.dataProtocolo) as 'Dias pendentes' from
               apresentante as a inner join daje as d on a.codApresentante = d.codApresentante;";

      return $pendencias_daje = mysqli_query($conn, $sql);
   }

   $pendencias_confirmacao = query_confirmacao();
   $pendencias_retorno = query_retorno();
   $pendencias_daje = query_daje();
?>


<!-- START - CARD CONTENT -->
<div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
 <!-- START - TABELAS: CONFIRMAÇÕES -->
 <div class="tab_body table-responsive-lg">
    <table class="table table-bordered">
      <thead class="table-light">
        <div class="p-2"></div>
        <p class="text-danger">&nbsp; <strong><em>ARQUIVO: CONFIRMAÇÃO</em></strong> &nbsp; Não enviado(s) pelo cartório</p>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Apresentante</th>
          <th scope="col">Remessa</th>
          <th scope="col">Data da Remessa</th>
          <th scope="col">IBGE</th>
          <th scope="col">Dias em atraso</th>
          <th><input type="checkbox"></th>
        </tr>
      </thead>
      <tbody>
        <?php
           $i = 1;
           foreach($pendencias_confirmacao as $p_conf){
        ?>
        <tr>
          <th scope="row"><?= $i ?></th>
          <td><?= $p_conf["Apresentante"] ?></td>
          <td><?= $p_conf["Remessa"] ?></td>
          <td><?= $p_conf["Data da remessa"] ?></td>
          <td><?= $p_conf["Numero IBGE"] ?></td>
          <td><?= $p_conf["Dias pendentes"] ?></td>
          <td><input type="checkbox"></td>
        </tr>
        <?php $i = $i + 1; } ?>
      </tbody>
    </table>
    <!-- END - TABELAS: CONFIRMAÇÕES -->

    <!-- START - TABELAS: RETORNOS -->
    <table border="1px" class="table table-bordered">
      <thead class="table-light">

        <div class="p-2"></div>
        <p class="text-danger">&nbsp; <strong><em>ARQUIVO: RETORNO</em></strong> &nbsp; Não enviado(s) pelo cartório</p>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Portador</th>
          <th scope="col">Nosso Numero</th>
          <th scope="col">Conta contrato</th>
          <th scope="col">Protocolo</th>
          <th scope="col">Data Protocolo</th>
          <th scope="col">Data Confirmação</th>
          <th scope="col">Dias em atraso</th>
          <th><input type="checkbox" ></th>
        </tr>
      </thead>
      <tbody>

        <?php
            $count_ret = 1;
            foreach($pendencias_retorno as $p_ret){ ?>
        <tr>
          <th scope="row"><?= $count_ret ?></th>
          <td><?= $p_ret["Apresentante"] ?></td>
          <td><?= $p_ret["Nosso numero"] ?></td>
          <td><?= $p_ret["Conta contrato"] ?></td>
          <td><?= $p_ret["Protocolo"] ?></td>
          <td><?= $p_ret["Data do protocolo"] ?></td>
          <td><?= $p_ret["Data confirmacao"] ?></td>
          <td><?= $p_ret["Dias pendentes"] ?></td>
          <td><input type="checkbox" ></td>
        </tr>
        <?php $count_ret++; }?>
      </tbody>
    </table>
    <!-- END - TABELAS: RETORNOS -->

    <!-- START - TABELAS: DAJES -->
    <table border="1px" class="table table-bordered">
      <thead class="table-light">
        <div class="p-2"></div>
        <p class="text-danger">&nbsp; <strong><em>ARQUIVO: DAJE</em></strong> &nbsp; Não anexado(s) pelo cartório</p>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Portador</th>
          <th scope="col">Arquivo</th>
          <th scope="col">Data Arquivo</th>
          <th scope="col">Protocolo</th>
          <th scope="col">Data Protocolo</th>
          <th scope="col">Documento	Devedor</th>
          <th scope="col">Valor Título</th>
          <th scope="col">Dias em atraso</th>
          <th><input type="checkbox" ></th>
        </tr>
      </thead>
      <tbody>
        <?php
            $count_daje = 1;
            foreach($pendencias_daje as $p_daje){
         ?>
        <tr>
          <th scope="row"><?= $count_daje ?></th>
          <td><?= $p_daje["Apresentante"] ?></td>
          <td><?= $p_daje["Arquivo"] ?></td>
          <td><?= $p_daje["Data do arquivo"] ?></td>
          <td><?= $p_daje["Protocolo"] ?></td>
          <td><?= $p_daje["Data do protocolo"] ?></td>
          <td><?= $p_daje["Documento do devedor"] ?></td>
          <td><?= 'R$ ' . (number_format($p_daje["Valor do titulo"], 2, ',', '.')) ?></td>
          <td><?= $p_daje["Dias pendentes"] ?></td>
          <td><input type="checkbox" ></td>
        </tr>
        <?php $count_daje++; }?>
      </tbody>
    </table>
    <!-- END - TABELAS: DAJES -->
    </div>
 </div>
 <!-- END - CARD CONTENT -->

 <!-- START - COLAPSE ONLY CONFIRMAÇÕES -->
 <div id="collapseTwo" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
   <div class="tab_body table-responsive-lg">
     <table class="table table-bordered">
       <thead class="table-light">
         <div class="p-2"></div>
         <p class="text-danger">&nbsp; <strong><em>ARQUIVO: CONFIRMAÇÃO</em></strong> &nbsp; Não enviado(s) pelo cartório</p>
         <tr>
           <th scope="col">#</th>
           <th scope="col">Apresentante</th>
           <th scope="col">Remessa</th>
           <th scope="col">Data da Remessa</th>
           <th scope="col">IBGE</th>
           <th scope="col">Dias em atraso</th>
           <th><input type="checkbox" ></th>
         </tr>
       </thead>
       <tbody>
          <?php
             $count_conf = 1;
             foreach($pendencias_confirmacao as $p_conf){
          ?>
          <tr>
            <th scope="row"><?= $i ?></th>
            <td><?= $p_conf["Apresentante"] ?></td>
            <td><?= $p_conf["Remessa"] ?></td>
            <td><?= $p_conf["Data da remessa"] ?></td>
            <td><?= $p_conf["Numero IBGE"] ?></td>
            <td><?= $p_conf["Dias pendentes"] ?></td>
            <td><input type="checkbox"></td>
          </tr>
          <?php $count_conf = $count_conf + 1; } ?>
       </tbody>
     </table>
 </div>
</div>
<!-- END - COLAPSE ONLY CONFIRMAÇÕES -->

<!-- START - COLAPSE ONLY RETORNOS -->
 <div id="collapseThree" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
   <div class="tab_body table-responsive-lg">
     <table border="1px" class="table table-bordered">
       <thead class="table-light">

         <div class="p-2"></div>
         <p class="text-danger">&nbsp; <strong><em>ARQUIVO: RETORNO</em></strong> &nbsp; Não enviado(s) pelo cartório</p>
         <tr>
           <th scope="col">#</th>
           <th scope="col">Portador</th>
           <th scope="col">Nosso Numero</th>
           <th scope="col">Conta contrato</th>
           <th scope="col">Protocolo</th>
           <th scope="col">Data Protocolo</th>
           <th scope="col">Data Confirmação</th>
           <th scope="col">Dias em atraso</th>
           <th><input type="checkbox" ></th>
         </tr>
       </thead>
       <tbody>
          <?php
              $count_ret = 1;
              foreach($pendencias_retorno as $p_ret){
          ?>
          <tr>
            <th scope="row"><?= $count_ret ?></th>
            <td><?= $p_ret["Apresentante"] ?></td>
            <td><?= $p_ret["Nosso numero"] ?></td>
            <td><?= $p_ret["Conta contrato"] ?></td>
            <td><?= $p_ret["Protocolo"] ?></td>
            <td><?= $p_ret["Data do protocolo"] ?></td>
            <td><?= $p_ret["Data confirmacao"] ?></td>
            <td><?= $p_ret["Dias pendentes"] ?></td>
            <td><input type="checkbox" ></td>
          </tr>
          <?php $count_ret = $count_ret + 1; }?>


       </tbody>
     </table>
 </div>
</div>
<!-- END - COLAPSE ONLY RETORNOS -->

<!-- START - COLAPSE ONLY DAJE -->
<div id="collapseFour" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
   <div class="tab_body table-responsive-lg">
     <table border="1px" class="table table-bordered">
       <thead class="table-light">
         <div class="p-2"></div>
         <p class="text-danger">&nbsp; <strong><em>ARQUIVO: DAJE</em></strong> &nbsp; Não anexado(s) pelo cartório</p>
         <tr>
           <th scope="col">#</th>
           <th scope="col">Portador</th>
           <th scope="col">Arquivo</th>
           <th scope="col">Data Arquivo</th>
           <th scope="col">Protocolo</th>
           <th scope="col">Data Protocolo</th>
           <th scope="col">Documento	Devedor</th>
           <th scope="col">Valor Título</th>
           <th scope="col">Dias em atraso</th>
           <th><input type="checkbox" ></th>
         </tr>
       </thead>
       <tbody>
          <?php
              $count_daje = 1;
              foreach($pendencias_daje as $p_daje){
           ?>
          <tr>
            <th scope="row"><?= $count_daje ?></th>
            <td><?= $p_daje["Apresentante"] ?></td>
            <td><?= $p_daje["Arquivo"] ?></td>
            <td><?= $p_daje["Data do arquivo"] ?></td>
            <td><?= $p_daje["Protocolo"] ?></td>
            <td><?= $p_daje["Data do protocolo"] ?></td>
            <td><?= $p_daje["Documento do devedor"] ?></td>
            <td><?= 'R$ ' . number_format($p_daje["Valor do titulo"], 2, ',', '.') ?></td>
            <td><?= $p_daje["Dias pendentes"] ?></td>
            <td><input type="checkbox" ></td>
          </tr>
          <?php $count_daje++; }?>
       </tbody>
     </table>
 </div>
 <!-- END - COLAPSE ONLY DAJE -->
