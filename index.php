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
              <tr>
                <th scope="row">1</th>
                <td>COELBA</td>
                <td>B9001408.191</td>
                <td>14/08/2019</td>
                <td>2904902</td>
                <td>13</td>
                <td><input type="checkbox"></td>
              </tr>

              <tr>
                <th scope="row">2</th>
                <td>COELBA</td>
                <td>B9001408.191</td>
                <td>14/08/2019</td>
                <td>2904902</td>
                <td>13</td>
                <td><input type="checkbox" ></td>
              </tr>

              <tr>
                <th scope="row">3</th>
                <td>COELBA</td>
                <td>B9001408.191</td>
                <td>14/08/2019</td>
                <td>2904902</td>
                <td>13</td>
                <td><input type="checkbox" ></td>
              </tr>

              <tr>
                <th scope="row">4</th>
                <td>COELBA</td>
                <td>B9001408.191</td>
                <td>14/08/2019</td>
                <td>2904902</td>
                <td>13</td>
                <td><input type="checkbox" ></td>
              </tr>
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
              <tr>
                <th scope="row">1</th>
                <td>COELBA</td>
                <td>47323</td>
                <td>0230047323</td>
                <td>03345</td>
                <td>26/03/2019</td>
                <td>29/03/2019</td>
                <td>13</td>
                <td><input type="checkbox" ></td>
              </tr>

              <tr>
                <th scope="row">2</th>
                <td>COELBA</td>
                <td>47323</td>
                <td>0230047323</td>
                <td>03345</td>
                <td>26/03/2019</td>
                <td>29/03/2019</td>
                <td>13</td>
                <td><input type="checkbox" ></td>
              </tr>

              <tr>
                <th scope="row">3</th>
                <td>COELBA</td>
                <td>47323</td>
                <td>0230047323</td>
                <td>03345</td>
                <td>26/03/2019</td>
                <td>29/03/2019</td>
                <td>13</td>
                <td><input type="checkbox" ></td>
              </tr>

              <tr>
                <th scope="row">4</th>
                <td>COELBA</td>
                <td>47323</td>
                <td>0230047323</td>
                <td>03345</td>
                <td>26/03/2019</td>
                <td>29/03/2019</td>
                <td>13</td>
                <td><input type="checkbox" ></td>
              </tr>
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
              <tr>
                <th scope="row">1</th>
                <td>COELBA</td>
                <td>AC9000208.191</td>
                <td>02/08/2019</td>
                <td>2904902</td>
                <td>15/07/2019</td>
                <td>000.000.000.00</td>
                <td>345,00</td>
                <td>15</td>
                <td><input type="checkbox" ></td>
              </tr>

              <tr>
                <th scope="row">2</th>
                <td>COELBA</td>
                <td>AC9000208.191</td>
                <td>02/08/2019</td>
                <td>2904902</td>
                <td>15/07/2019</td>
                <td>000.000.000.00</td>
                <td>345,00</td>
                <td>15</td>
                <td><input type="checkbox" ></td>
              </tr>

              <tr>
                <th scope="row">3</th>
                <td>COELBA</td>
                <td>AC9000208.191</td>
                <td>02/08/2019</td>
                <td>2904902</td>
                <td>15/07/2019</td>
                <td>000.000.000.00</td>
                <td>345,00</td>
                <td>15</td>
                <td><input type="checkbox" ></td>
              </tr>

              <tr>
                <th scope="row">4</th>
                <td>COELBA</td>
                <td>AC9000208.191</td>
                <td>02/08/2019</td>
                <td>2904902</td>
                <td>15/07/2019</td>
                <td>000.000.000.00</td>
                <td>345,00</td>
                <td>15</td>
                <td><input type="checkbox"></td>
              </tr>
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
                <tr>
                  <th scope="row">1</th>
                  <td>COELBA</td>
                  <td>B9001408.191</td>
                  <td>14/08/2019</td>
                  <td>2904902</td>
                  <td>13</td>
                  <td><input type="checkbox" ></td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>COELBA</td>
                  <td>B9001408.191</td>
                  <td>14/08/2019</td>
                  <td>2904902</td>
                  <td>13</td>
                  <td><input type="checkbox" ></td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td>COELBA</td>
                  <td>B9001408.191</td>
                  <td>14/08/2019</td>
                  <td>2904902</td>
                  <td>13</td>
                  <td><input type="checkbox" ></td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>COELBA</td>
                  <td>B9001408.191</td>
                  <td>14/08/2019</td>
                  <td>2904902</td>
                  <td>13</td>
                  <td><input type="checkbox" ></td>
                </tr>
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
                <tr>
                  <th scope="row">1</th>
                  <td>COELBA</td>
                  <td>47323</td>
                  <td>0230047323</td>
                  <td>03345</td>
                  <td>26/03/2019</td>
                  <td>29/03/2019</td>
                  <td>13</td>
                  <td><input type="checkbox" ></td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>COELBA</td>
                  <td>47323</td>
                  <td>0230047323</td>
                  <td>03345</td>
                  <td>26/03/2019</td>
                  <td>29/03/2019</td>
                  <td>13</td>
                  <td><input type="checkbox" ></td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td>COELBA</td>
                  <td>47323</td>
                  <td>0230047323</td>
                  <td>03345</td>
                  <td>26/03/2019</td>
                  <td>29/03/2019</td>
                  <td>13</td>
                  <td><input type="checkbox" ></td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>COELBA</td>
                  <td>47323</td>
                  <td>0230047323</td>
                  <td>03345</td>
                  <td>26/03/2019</td>
                  <td>29/03/2019</td>
                  <td>13</td>
                  <td><input type="checkbox" ></td>
                </tr>
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
                <tr>
                  <th scope="row">1</th>
                  <td>COELBA</td>
                  <td>AC9000208.191</td>
                  <td>02/08/2019</td>
                  <td>2904902</td>
                  <td>15/07/2019</td>
                  <td>000.000.000.00</td>
                  <td>345,00</td>
                  <td>15</td>
                  <td><input type="checkbox" ></td>
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>COELBA</td>
                  <td>AC9000208.191</td>
                  <td>02/08/2019</td>
                  <td>2904902</td>
                  <td>15/07/2019</td>
                  <td>000.000.000.00</td>
                  <td>345,00</td>
                  <td>15</td>
                  <td><input type="checkbox" ></td>
                </tr>

                <tr>
                  <th scope="row">3</th>
                  <td>COELBA</td>
                  <td>AC9000208.191</td>
                  <td>02/08/2019</td>
                  <td>2904902</td>
                  <td>15/07/2019</td>
                  <td>000.000.000.00</td>
                  <td>345,00</td>
                  <td>15</td>
                  <td><input type="checkbox" ></td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>COELBA</td>
                  <td>AC9000208.191</td>
                  <td>02/08/2019</td>
                  <td>2904902</td>
                  <td>15/07/2019</td>
                  <td>000.000.000.00</td>
                  <td>345,00</td>
                  <td>15</td>
                  <td><input type="checkbox" ></td>
                </tr>
              </tbody>
            </table>
        </div>
        <!-- END - COLAPSE ONLY DAJE -->
      </div>
      <!-- END - ACORDION -->
    </div>
  </body>
  <!-- END-CONTEUDO -->
  <footer>
    <!-- MODAL REGISTROS DE ATENDIMENTO -->
    <div class="modal fade" id="mModal_1" tabindex="-1" role="dialog" aria-labelledby="modalAtendimento" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal_estilo">
          <div class="modal-header">
            <h5 class="modal-title text-center" id="modalAtendimento" style="width: 100%;">Registros de atendimento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- START - MODAL BODY -->
          <div class="modal-body mx-auto">
            <!-- START - PESQUISAR ATENDIMENTO -->
            <form>
              <div class="form-group form-inline justify-content-center">
                <input type="text" class="form-control" id="pesquisar_atendimento" placeholder="Buscar atendimento..."> &nbsp;&nbsp;
                <button type="submit" class="btn btn-outline-primary" data-toggle="tooltip"
                data-placement="bottom" title="Pesquise por, título ou protocolo do atendimento.">Pesquisar</button>
              </div>
            </form>
            <!-- END - PESQUISAR ATENDIMENTO -->

            <?php
               include("conexao.php");

               $sql = " SELECT usr.nome as 'usuarioNome', atdm.protocolo as 'atdmProtocolo',
               atdm.descricao as 'atdmDescricao', atdm.dataAtdm as 'atdmData', atdm.statusAtdm as 'atdmStatus'
                        FROM usuario as usr
                        INNER JOIN atendimento as atdm on usr.idUsuario = atdm.idUsuario; ";

               $dados_atendimento = mysqli_query($conn, $sql);
            ?>

            <!-- START - CARD EXEMPLO 1 -->
            <?php foreach($dados_atendimento as $d_atdm){ ?>
            <div class="card">
              <div class="card-header d-flex justify-content-between text-margin-adjust align-items-center" style="width: 100%;">
                <h5 class="text-margin-adjust" >Salvador - 1</h5>
                <p class="text-margin-adjust"><strong>Protocolo:</strong> <?=$d_atdm["atdmProtocolo"]?></p>
                <p class="text-margin-adjust text-info">Atendente: <?=$d_atdm["usuarioNome"]?></p>
              </div>
              <div class="card-body" style="width: 100%;">
                <div class="p-2"></div>

                <div class="container border rounded">
                  <div class="row">
                    <p class="font-weight-bold text-center col">Atendente: <?=$d_atdm["usuarioNome"]?></p>
                    <p class="text-muted text-center col"><?=$d_atdm["atdmData"]?></p>
                  </div>
                  <div class="row">
                    <p class="text-dark text-left col"> <?=$d_atdm["atdmDescricao"]?></p>
                  </div>
                </div>

                <div class="p-1"></div>

                <div class="d-flex justify-content-between text-margin-adjust align-items-center" style="width: 100%;">
                  <div class="text-margin-adjust">
                    <div class="btn btn-group" style="padding: 0;">
                      <button class="btn btn-outline-primary text-margin-adjust"><i class="fas fa-plus"></i></button>
                    </div>

                    <div class="fileUpload btn btn-outline-primary">
                      <i class="fas fa-paperclip"></i>
                      <input type="file" class="upload" />
                    </div>
                    &nbsp;
                  </div>
                  <p id="status" class="text-margin-adjust"><strong><?=$d_atdm["atdmStatus"]?></strong></p>
                </div>

                <div class="p-1"></div>

                <div class="d-flex justify-content-between text-margin-adjust align-items-center" style="width: 100%;">
                  <select id="selecaoStatus" onchange="selecinarStatus()" class="custom-select text-margin-adjust">

                    <option value="Concluído">Concluído</option>
                    <option value="Pendente">Pendente</option>
                    <option value="Chamado TI">Chamado TI</option>
                    <option value="Reaberto">Reaberto</option>
                  </select>
                   &nbsp; &nbsp;

                  <button class="btn btn-outline-primary text-margin-adjust">Salvar</button>
                </div>

              </div>
              <div class="card-footer text-muted text-right" style="width: 100%;">
                 Data: <?=$d_atdm["atdmData"]?>
              </div>
            </div>
            <div class="p-2"></div>
            <?php }?>
            <!-- END - CARD EXEMPLO 1 -->

          </div>
          <!-- END - MODAL BODY -->
          <nav>
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Voltar</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Avançar</a>
              </li>
            </ul>
          </nav>
          <!-- START - MODAL FOOTER -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Salvar</button>
          </div>
        </div>
        <!-- END - MODAL FOOTER -->
      </div>
    </div>

    <!-- MODAL CADASTROS DE ATENDIMENTO -->
    <div class="modal fade" id="mModal_2" tabindex="-1" role="dialog" aria-labelledby="modalRegistro" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <!-- START - MODAL CONTEUDO -->
        <div class="modal-content modal_estilo">
          <div class="modal-header">
            <h5 class="modal-title text-center" id="modalRegistro" style="width: 100%;">Novo atendimento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- START - MODAL BODY -->
          <div class="modal-body mx-auto">
            <!-- START - CARD EXEMPLO 1 -->
            <div class="card">
              <div class="card-header d-flex justify-content-between text-margin-adjust align-items-center" style="width: 100%;">
                <h5 class="text-margin-adjust" >Salvador - 1</h5>
                <p class="text-margin-adjust text-info">Atendente: xxxxxxx</p>
              </div>
              <div class="card-body" style="width: 100%;">

                <div class="p-1"></div>

                <textarea rows="5" class="form-control" placeholder="Registrar atendimento..."></textarea>

              </div>

              <div class="card-footer text-muted text-right" style="width: 100%;">
                Data do atendimento: 15/06/2019 - 12:49
              </div>
            </div>
            <!-- END - CARD EXEMPLO 1 -->
          </div>
          <!-- END - MODAL BODY -->

          <!-- START - MODAL FOOTER -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Salvar</button>
          </div>
          <!-- END - MODAL FOOTER -->
        </div>
        <!-- END - MODAL CONTEUDO -->

      </div>
    </div>

    <script src="https://kit.fontawesome.com/396d03f51e.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
  </footer>
</html>
