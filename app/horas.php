<?php include 'base/header.php' ?>
<?php include 'base/aside.php' ?>

      <section class="section-container">
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">
               <div>Relatório de horas</div>
            </div>
             <div class="card card-default">
                 <div class="card-body">
                     <form>
                         <div class="form-row row mb-3">
                             <div class="col-2">
                                 <label class="col-form-label">ID chamado:</label>
                                 <input type="text" class="form-control">
                             </div>
                             <div class="col-3">
                                 <label class="col-form-label">Pessoa:</label>
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
                             <div class="col-6">
                                 <label class="col-form-label">Data de lançamento:</label>
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
                                 <th data-column-id="pessoa" data-order="asc">Pessoa</th>
                                 <th data-column-id="chamado" data-order="asc">Chamado</th>
                                 <th data-column-id="hora_inicio">Hora início</th>
                                 <th data-column-id="hora_fim">Hora fim</th>
                                 <th data-column-id="data">Data</th>
                                 <th data-column-id="commands" data-formatter="commandEditLancamento" data-sortable="false">
                                     <div class="text-right">Ações</div>
                                 </th>
                             </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>Denis Prust</td>
                                     <td>10238</td>
                                     <td>08:00</td>
                                     <td>12:00</td>
                                     <td>14/10/2019</td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>Denis Prust</td>
                                     <td>10238</td>
                                     <td>13:12</td>
                                     <td>18:00</td>
                                     <td>14/10/2019</td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>Denis Prust</td>
                                     <td>10392</td>
                                     <td>08:00</td>
                                     <td>12:00</td>
                                     <td>15/10/2019</td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>Denis Prust</td>
                                     <td>10392</td>
                                     <td>13:12</td>
                                     <td>18:00</td>
                                     <td>15/10/2019</td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>Denis Prust</td>
                                     <td>10472</td>
                                     <td>08:00</td>
                                     <td>12:00</td>
                                     <td>16/10/2019</td>
                                     <td></td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
      </section><!-- Page footer-->

    <div class="modal fade" id="modal-lancamento" tabindex="-1" role="dialog" aria-labelledby="modal-responsavel-label" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-responsavel-label">Alterar lançamento</h4>
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
                                        <span class="text-bold">Pessoa:</span> Denis Prust
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <form>
                        <div class="form-row row mb-3">
                            <div class="col-4">
                                <label class="col-form-label">Chamado:</label>
                                <input type="text" class="form-control" value="10238">
                            </div>
                            <div class="col-3">
                                <label for="startDate" class="col-form-label">Dia</label>
                                <div class="input-group date datetimepicker2">
                                    <input id="startDate" name="startDate" type="text" value="14/10/2019" class="form-control" />
                                    <span class="input-group-append input-group-addon">
                                        <span class="input-group-text fas fa-calendar-alt"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="startDate" class="col-form-label">Hora início</label>
                                <div class="input-group date datetimepicker2">
                                    <input id="startDate" name="startDate" type="text" value="08:00" class="form-control" />
                                    <span class="input-group-append input-group-addon">
                                        <span class="input-group-text fas fa-calendar-alt"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="startDate" class="col-form-label">Hora fim</label>
                                <div class="input-group date datetimepicker2">
                                    <input id="startDate" name="startDate" type="text" value="12:00" class="form-control" />
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