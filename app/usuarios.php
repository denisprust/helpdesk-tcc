<?php include 'base/header.php' ?>
<?php include 'base/aside.php' ?>

      <section class="section-container">
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">
               <div>Usuários</div>
            </div>
             <div class="card card-default">
                 <div class="card-body">
                     <button data-toggle="modal" data-target="#modal-novo-usuario" class="btn btn-success float-right">
                         <i class="fa fa-plus"></i>
                         Novo
                     </button>
                     <form>
                         <div class="form-row row mb-3">
                             <div class="col-3">
                                 <label class="col-form-label">ID:</label>
                                 <input type="text" class="form-control">
                             </div>
                             <div class="col-4">
                                 <label class="col-form-label">Nome:</label>
                                 <input type="text" class="form-control">
                             </div>
                             <div class="col-4">
                                 <label class="col-form-label">Tipo de usuário:</label>
                                 <select class="form-control">
                                     <option>-- Selecione --</option>
                                     <option>Administrador</option>
                                     <option>Atendente</option>
                                 </select>
                             </div>

                         </div>
                         <div class="form-row row mb-2 mt-4">
                             <div class="col-12 text-center">
                                 <button type="submit" class="btn btn-primary">Filtrar</button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div><!-- END card-->

             <div class="card">
                 <div class="card-body">
                     <div class="table-responsive bootgrid">
                         <table class="table table-striped" id="bootgrid-command">
                             <thead>
                             <tr>
                                 <th data-column-id="id" data-type="numeric">ID</th>
                                 <th data-column-id="nome" data-order="asc">Nome</th>
                                 <th data-column-id="tipo_usuario">Tipo de usuário</th>
                                 <th data-column-id="data_cadastro">Data de cadastro</th>
                                 <th data-column-id="data_alteracao">Data de alteração</th>
                                 <th data-column-id="commands" data-formatter="commandEditUser" data-sortable="false">
                                     <div class="text-right">Ações</div>
                                 </th>
                             </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>10238</td>
                                     <td>Roberto Freitas</td>
                                     <td>Administrador</td>
                                     <td>14/10/2019 13:47:12</td>
                                     <td>14/10/2019 13:47:12</td>
                                 </tr>
                                 <tr>
                                     <td>10243</td>
                                     <td>João Pedro</td>
                                     <td>Atendente</td>
                                     <td>19/10/2019 13:47:12</td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>10248</td>
                                     <td>Rodrigo Santos</td>
                                     <td>Atendente</td>
                                     <td>24/10/2019 13:47:12</td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>10248</td>
                                     <td>Pedro dos santos</td>
                                     <td>Atendente</td>
                                     <td>24/10/2019 13:47:12</td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>10253</td>
                                     <td>Denis Prust</td>
                                     <td>Administrador</td>
                                     <td>29/10/2019 13:47:12</td>
                                     <td>14/10/2019 13:47:12</td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
      </section><!-- Page footer-->

    <div class="modal fade" id="modal-usuario" tabindex="-1" role="dialog" aria-labelledby="modal-responsavel-label" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-responsavel-label">Alterar usuário</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row row m-1">
                        <div class="col-12">
                            <div class="alert alert-primary">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <i class="fa fa-caret-right"></i>
                                        <span class="text-bold">ID:</span> 10253
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <i class="fa fa-caret-right"></i>
                                        <span class="text-bold">Data de cadastro:</span> 29/10/2019 13:47:12
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <i class="fa fa-caret-right"></i>
                                        <span class="text-bold">Data de alteração:</span> 30/10/2019 11:33:29
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <form>
                        <div class="form-row row mb-3">
                            <div class="col-4">
                                <label class="col-form-label">Nome:</label>
                                <input type="text" class="form-control" value="Denis Prust">
                            </div>
                            <div class="col-4">
                                <label class="col-form-label">Tipo de usuário:</label>
                                <select class="form-control">
                                    <option>-- Selecione --</option>
                                    <option selected>Administrador</option>
                                    <option>Atendente</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <label class="col-form-label">Data de nascimento:</label>
                                <div class="input-group date datetimepicker2">
                                    <input id="startDate" name="startDate" type="text" value="26/04/1996" class="form-control" />
                                    <span class="input-group-append input-group-addon">
                                         <span class="input-group-text fas fa-calendar-alt"></span>
                                     </span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-novo-usuario" tabindex="-1" role="dialog" aria-labelledby="modal-responsavel-label" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-responsavel-label">Novo usuário</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row row mb-3">
                            <div class="col-4">
                                <label class="col-form-label">Nome:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-4">
                                <label class="col-form-label">Tipo de usuário:</label>
                                <select class="form-control">
                                    <option>-- Selecione --</option>
                                    <option>Administrador</option>
                                    <option>Atendente</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <label class="col-form-label">Data de nascimento:</label>
                                <div class="input-group date datetimepicker2">
                                    <input id="startDate" name="startDate" type="text" class="form-control" />
                                    <span class="input-group-append input-group-addon">
                                         <span class="input-group-text fas fa-calendar-alt"></span>
                                     </span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'base/footer.php' ?>