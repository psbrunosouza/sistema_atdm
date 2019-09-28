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



          <!-- START - CARD EXEMPLO 1 -->
          <?php
             include('leituraAtendimento.php');
             $dados_atendimento = lerRegistrosAtendimento();
             foreach($dados_atendimento as $d_atdm){ ?>
          <div class="card">
            <div class="card-header d-flex justify-content-between text-margin-adjust align-items-center" style="width: 100%;">
             <h5 class="text-margin-adjust" ><?=$d_atdm["Cartorio"]?></h5>
             <p class="text-margin-adjust"><strong>Protocolo:</strong> <?=$d_atdm["Protocolo"]?></p>
             <p class="text-margin-adjust text-info">Atendente: <?=$d_atdm["Usuario"]?></p>
            </div>
            <div class="card-body" style="width: 100%;">
             <div class="p-2"></div>

             <div class="container border rounded">
                <div class="row">
                  <p class="font-weight-bold text-center col">Atendente: <?=$d_atdm["Usuario"]?></p>
                  <p class="text-muted text-center col"><?=$d_atdm["Data atendimento"]?></p>
                </div>
                <div class="row">
                  <p class="text-dark text-left col"> <?=$d_atdm["Descricao"]?></p>
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
                <p id="status" class="text-margin-adjust"><strong><?=$d_atdm["Status"]?></strong></p>
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
               Data: <?=$d_atdm["Data atendimento"]?>
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
  <form action="escritaAtendimento.php" method="post">
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
            <textarea name="descAtdm" rows="5" class="form-control" placeholder="Registrar atendimento..."></textarea>
            </div>
          </div>

          <!-- END - CARD EXEMPLO 1 -->
        </div>
        <!-- END - MODAL BODY -->

        <!-- START - MODAL FOOTER -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button name="btnSalvar" type="submit" class="btn btn-primary">Salvar</button>
        </div>
        <!-- END - MODAL FOOTER -->
      </div>
      <!-- END - MODAL CONTEUDO -->

    </div>
  </div>
  </form>

  <script src="https://kit.fontawesome.com/396d03f51e.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="./js/main.js"></script>
</footer>
