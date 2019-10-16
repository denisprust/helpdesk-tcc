<?php include 'base/header.php' ?>
<?php include 'base/aside.php' ?>

      <section class="section-container">
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">
               <div>Meus Chamados</div>
            </div>
             <div class="card card-default">
                 <div class="card-body">
                     <button class="btn btn-success float-right" data-toggle="modal" data-target="#modal-novo-chamado">
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
                                 <label class="col-form-label">Título:</label>
                                 <input type="text" class="form-control">
                             </div>
                             <div class="col-4">
                                 <label class="col-form-label">Responsável:</label>
                                 <div class="input-group">
                                     <div class="input-group-prepend">
                                         <input type="text" class="form-control" style="width: 100px;" placeholder="Código">
                                     </div>
                                     <input type="text" class="form-control" placeholder="Nome">
                                 </div>
                             </div>
                         </div>

                         <div class="form-row row mb-2">
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
                                 <th data-column-id="sender">Título</th>
                                 <th data-column-id="received" data-order="desc">Data de Abertura</th>
                                 <th data-column-id="responsavel" data-order="desc">Responsável</th>
                                 <th data-column-id="commands" data-formatter="commands" data-sortable="false">
                                     <div class="text-right">Ações</div>
                                 </th>
                             </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>10238</td>
                                     <td>Lorem Ipsum</td>
                                     <td>14/10/2019 13:47:12</td>
                                     <td>Rodrigo Santos</td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>10243</td>
                                     <td>Lorem Ipsum</td>
                                     <td>19/10/2019 13:47:12</td>
                                     <td>João Pedro</td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>10248</td>
                                     <td>Lorem Ipsum</td>
                                     <td>24/10/2019 13:47:12</td>
                                     <td>Daniel Silva</td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>10253</td>
                                     <td>Lorem Ipsum</td>
                                     <td>29/10/2019 13:47:12</td>
                                     <td>Daniel Silva</td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>10234</td>
                                     <td>Lorem Ipsum</td>
                                     <td>10/10/2019 13:47:12</td>
                                     <td>Denis Prust</td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>10239</td>
                                     <td>Lorem Ipsum</td>
                                     <td>15/10/2019 13:47:12</td>
                                     <td>João Pedro</td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>10244</td>
                                     <td>Lorem Ipsum</td>
                                     <td>20/10/2019 13:47:12</td>
                                     <td>Roberto Freitas</td>
                                     <td></td>
                                 </tr>
                                 <tr>
                                     <td>10249</td>
                                     <td>Lorem Ipsum</td>
                                     <td>25/10/2019 13:47:12</td>
                                     <td>Pedro dos santos</td>
                                     <td></td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
      </section><!-- Page footer-->

    <div class="modal fade" id="modal-novo-chamado" tabindex="-1" role="dialog" aria-labelledby="modal-responsavel-label" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-responsavel-label">Novo chamado</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row row mb-3">
                            <div class="col-8">
                                <label class="col-form-label">Título:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-4">
                                <label class="col-form-label">Responsável:</label>
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
                        <div class="form-row row mt-2 mb-4">
                            <div class="col-12">
                                <label class="col-form-label">Descrição:</label>
                                <textarea class="form-control no-resize"></textarea>
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