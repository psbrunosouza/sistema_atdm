<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema de atendimento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
  </head>
  <body>

    <!-- START-CONTEUDO -->
    <div id="container" class="container-fluid">
      <!-- START - LOGO -->
      <div class="p-2"></div>
      <div class="logo mx-auto d-flex justify-content-around align-items-center">
        <div class="col-5">
          <img  width="200px" src="./img/logo.jpg"/>
        </div>
        <div class="col-7">
          <h3>Relatório de pendências geral</h3>
        </div>
      </div>
      <!-- END - LOGO -->

      <!-- START - PESQUISA -->
      <div class="p-2"></div>
      <form class="mx-auto">

        <div class="form-row justify-content-center align-items-center">
          <div class="col input-group">
            <div class="input-group-prepend">
              <label class="input-group-text" for="comarca_campo">Comarca</label>
            </div>
            <select class="custom-select" id="comarca_campo">
              <option selected>Selecionar...</option>
              <option value="1">SALVADOR</option>
              <option value="2">FEIRA DE SANTANA</option>
              <option value="3">CAMAÇARI</option>
              <option value="4">LAURO DE FREITAS</option>
            </select>
          </div>
        </div>

        <div class="p-1"></div>

        <div class="row justify-content-around align-items-center">
          <div class="col-5 input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="data_campo">Data</span>
            </div>
            <input type="date" class="form-control" aria-describedby="data_campo">
          </div>

          <div class="col-5 input-group">
            <div class="input-group-prepend">
              <label class="input-group-text" for="portador_campo">Portador</label>
            </div>
            <select class="custom-select" id="portador_campo">
              <option selected>Selecionar...</option>
              <option value="1">COELBA</option>
              <option value="2">AMY</option>
              <option value="3">PGE</option>
            </select>
          </div>

          <div class="btn-group col-2">
            <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
          </div>
        </div>
      </form>
      <!-- END - PESQUISA -->

      <div class="p-2"></div>
      <!-- START - ACORDION -->
      <div class="tab accordion" id="accordion">
        <!-- START - CARD HEADER -->
        <div class="card-header" id="headingOne">
          <div class="d-flex justify-content-around align-items-center">
            <div>
              <!-- START - NOTIFICAÇÕES -->
              <button class="btn btn-link text-dark" type="button" data-toggle="collapse"
                data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Comarca de Salvador <span class="badge badge-danger">12</span>
              </button>

              <button class="btn btn-link text-dark" type="button" data-toggle="collapse"
                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Confirmações <span class="badge badge-danger">4</span>
              </button>

              <button class="btn btn-link text-dark" type="button" data-toggle="collapse"
                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Retornos <span class="badge badge-danger">4</span>
              </button>

              <button class="btn btn-link text-dark" type="button" data-toggle="collapse"
                data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                DAJE's <span class="badge badge-danger">4</span>
              </button>
              <!-- END - NOTIFICAÇÕES -->
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#mModal_2">
                <i class="fas fa-pencil-alt"></i>
              </button>

              <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#mModal_1">
                <i class="far fa-file-alt"></i>
              </button>

              <a href="pdfFile.php" class="btn btn-outline-primary">
                Relatório
              </a>

              <input type="email" class="form-control " aria-describedby="email_campo" placeholder="email@cartorio.com.br">
              <button type="button" class="btn btn-outline-primary">Enviar</button>
            </div>
          </div>
      </div>
      <!-- END - CARD HEADER -->

      <?php include("pendenciasGeral.php"); ?>

      </div>
      <!-- END - ACORDION -->
    </div>
  </body>
  <!-- END-CONTEUDO -->
  <?php include('footer.php') ?>
</html>
