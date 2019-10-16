<?php include 'base/header.php' ?>
<?php include 'base/aside.php' ?>

      <section class="section-container">
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">
               <div>Chamado #1252 - Criação de novo usuário administrador</div>
            </div>
             <div class="row">
                 <div class="col-12">
                     <div class="card card-default h-75">
                         <div class="card-body">
                             <div class="form-inline">
                                 <div class="dropdown ml-1">
                                     <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         Status
                                     </button>
                                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                         <a class="dropdown-item" href="#">Aguardando Cliente</a>
                                         <a class="dropdown-item" href="#">Aguardando Fornecedor</a>
                                     </div>
                                 </div>
                                 <div class="dropdown ml-1">
                                     <button class="btn btn-info" type="button" data-toggle="modal" data-target="#modal-responsavel">
                                         Alterar Responsável
                                     </button>
                                 </div>
                                 <div class="dropdown ml-1">
                                     <button class="btn btn-danger" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         Finalizar
                                     </button>
                                 </div>
                             </div>

                         </div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="mt-3 col-xs-12 col-sm-5 col-md-3">
                     <div class="card card-default h-100">
                         <div class="card-header">
                             <h4>Informações</h4>
                             <hr>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-12">
                                     <label class="text-bold">
                                        <i class="fa fa-caret-right"></i> Data de abertura:
                                     </label>
                                     07/10/2019 21:10
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-12">
                                     <label class="text-bold">
                                         <i class="fa fa-caret-right"></i> Responsável:
                                     </label>
                                     Denis Prust
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-12">
                                     <label class="text-bold">
                                         <i class="fa fa-caret-right"></i> Status:
                                     </label>
                                     <span class="text-bold text-green">Aberto</span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                <div class="mt-3 col-xs-12 col-sm-7 col-md-9">
                    <div class="card card-default h-100">
                        <div class="card-header">
                            <h4>
                                Interações
                                <button class="btn btn-success float-right" data-toggle="modal" data-target="#modal-nova-interacao"><i class="fa fa-plus"></i> Adicionar</button>
                            </h4>
                            <hr>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive bootgrid">
                                        <table class="table table-striped" id="bootgrid-command">
                                            <thead>
                                            <tr>
                                                <th data-column-id="id" data-order="desc" data-type="numeric">Interação</th>
                                                <th data-column-id="titulo">Título</th>
                                                <th data-column-id="descricao">Descrição</th>
                                                <th data-column-id="data">Data</th>
                                                <th data-column-id="responsavel">Usuário</th>
                                                <th data-column-id="commands" data-formatter="commandEdit" data-sortable="false">
                                                    <div class="text-right">Ações</div>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>02</td>
                                                    <td>Novo Responsável</td>
                                                    <td>Denis Prust agora é o novo responsável</td>
                                                    <td>14/10/2019 13:47:12</td>
                                                    <td>Fabrício Roberto</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>01</td>
                                                    <td>Abertura do Chamado</td>
                                                    <td title="Favor criar o usuário administrador com o e-mail abaixo:">Favor criar o usuário administra...</td>
                                                    <td>07/10/2019 21:10:29</td>
                                                    <td>José Pedro</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
      </section><!-- Page footer-->

    <div class="modal fade" id="modal-interacao" tabindex="-1" role="dialog" aria-labelledby="myModalLabelLarge" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabelLarge">Interação 01 - Novo Responsável</h4><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <span class="text-bold"><i class="fa fa-caret-right"></i> Usuário:</span> José Pedro
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-12">
                            <span class="text-bold"><i class="fa fa-caret-right"></i> Data de abertura:</span> 14/10/2019 13:47:12
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label class="label text-bold">Descrição:</label>
                            <div class="card card-default">
                                <div class="card-body text-justify">
                                    Favor criar o usuário administrador com o e-mail abaixo:

                                    denis.prust@empresaexemplo.com.br

                                    Obrigado.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-responsavel" tabindex="-1" role="dialog" aria-labelledby="modal-responsavel-label" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-responsavel-label">Novo Responsável</h4><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <label class="text-bold"> Novo Responsável:</label>
                            <select class="form-control">
                                <option>-- Selecione --</option>
                                <option>Daniel Silva</option>
                                <option>Pedro dos santos</option>
                                <option>Roberto Freitas</option>
                                <option>João Pedro</option>
                                <option>Rodrigo Santos</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label class="label text-bold">Descrição:</label>
                            <textarea class="form-control no-resize"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-nova-interacao" tabindex="-1" role="dialog" aria-labelledby="modal-responsavel-label" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-responsavel-label">Nova Interação</h4><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <label class="text-bold">Título:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-4">
                            <label class="text-bold">Responsável:</label>
                            <select class="form-control">
                                <option>-- Selecione --</option>
                                <option>Daniel Silva</option>
                                <option>Pedro dos santos</option>
                                <option>Roberto Freitas</option>
                                <option>João Pedro</option>
                                <option>Rodrigo Santos</option>
                                <option selected>Denis Prust</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label class="text-bold">Novo status:</label>
                            <select class="form-control">
                                <option>-- Selecione --</option>
                                <option>Aberto</option>
                                <option>Aguardando Cliente</option>
                                <option>Aguardando Fornecedor</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <label class="label text-bold">Descrição:</label>
                            <textarea class="form-control no-resize"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <div class="col-6">
                            <div class="form-inline">
                                <div class="form-group ml-1">
                                    <div class="input-group date datetimepicker2">
                                        <label for="startDate" class="mr-2">De</label>
                                        <input id="startDate" name="startDate" type="text" class="form-control" />
                                        <span class="input-group-append input-group-addon">
                                             <span class="input-group-text fas fa-calendar-alt"></span>
                                        </span>
                                    </div>
                                    &nbsp;
                                    <div class="input-group date datetimepicker2">
                                        <label for="endDate" class="ml-2 mr-2">Até </label>
                                        <input class="form-control" type="text">
                                        <span class="input-group-append input-group-addon">
                                             <span class="input-group-text fas fa-calendar-alt"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'base/footer.php' ?>