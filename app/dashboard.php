<?php include 'base/header.php' ?>
<?php include 'base/aside.php' ?>

      <section class="section-container">
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">
               <div>Dashboard</div><!-- START Language list-->
               <div class="ml-auto">
                  <div class="btn-group">
                      <button class="btn btn-secondary dropdown-toggle dropdown-toggle-nocaret" type="button" data-toggle="dropdown">
                          Outubro
                          <i class="fa fa-caret-down"></i>
                      </button>
                     <div class="dropdown-menu dropdown-menu-right-forced animated fadeInUpShort" role="menu">
                         <a class="dropdown-item" href="#" data-set-lang="en">Janeiro</a>
                         <a class="dropdown-item" href="#" data-set-lang="es">Fevereiro</a>
                         <a class="dropdown-item" href="#" data-set-lang="es">Março</a>
                         <a class="dropdown-item" href="#" data-set-lang="es">Abril</a>
                         <a class="dropdown-item" href="#" data-set-lang="es">Maio</a>
                         <a class="dropdown-item" href="#" data-set-lang="es">Junho</a>
                         <a class="dropdown-item" href="#" data-set-lang="es">Julho</a>
                         <a class="dropdown-item" href="#" data-set-lang="es">Agosto</a>
                         <a class="dropdown-item" href="#" data-set-lang="es">Setembro</a>
                         <a class="dropdown-item" href="#" data-set-lang="es">Outubro</a>
                         <a class="dropdown-item" href="#" data-set-lang="es">Novembro</a>
                         <a class="dropdown-item" href="#" data-set-lang="es">Dezembro</a>
                     </div>
                  </div>
               </div><!-- END Language list-->
            </div><!-- START cards box-->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- START card-->
                    <div class="card bg-danger-light pt-2 b0">
                        <div class="px-2">
                            <em class="fa fa-exclamation fa-lg float-right"></em>
                            <div class="h2 mt-0">25</div>
                            <div class="text-uppercase">Chamados abertos</div>
                        </div>
                        <div data-sparkline="" data-type="line" data-width="100%" data-height="75px" data-line-color="#e22235" data-chart-range-min="0" data-fill-color="#e22235" data-spot-color="#7266ba" data-min-spot-color="#7266ba" data-max-spot-color="#7266ba" data-highlight-spot-color="#7266ba" data-highlight-line-color="#7266ba" data-values="1,4,5,4,8,7,10" style="margin-bottom: -2px" data-resize="true"></div>
                    </div>
                </div>
               <div class="col-xl-3 col-md-6">
                  <!-- START card-->
                  <div class="card bg-success-light pt-2 b0">
                     <div class="px-2">
                         <em class="fa fa-check fa-lg float-right"></em>
                        <div class="h2 mt-0">22</div>
                        <div class="text-uppercase">Chamados fechados</div>
                     </div>
                     <div data-sparkline="" data-type="line" data-width="100%" data-height="75px" data-line-color="#2cb620" data-chart-range-min="0" data-fill-color="#2cb620" data-spot-color="#23b7e5" data-min-spot-color="#23b7e5" data-max-spot-color="#23b7e5" data-highlight-spot-color="#23b7e5" data-highlight-line-color="#23b7e5" data-values="2,5,3,7,4,5" style="margin-bottom: -2px" data-resize="true"></div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-12">
                  <!-- START card-->
                  <div class="card bg-purple-light pt-2 b0">
                     <div class="px-2"><em class="fa fa-spinner fa-lg float-right"></em>
                        <div class="h2 mt-0">2</div>
                        <div class="text-uppercase">Aguardando Cliente</div>
                     </div>
                     <div data-sparkline="" data-type="line" data-width="100%" data-height="75px" data-line-color="#7266ba" data-chart-range-min="0" data-fill-color="#7266ba" data-spot-color="#7266ba" data-min-spot-color="#7266ba" data-max-spot-color="#7266ba" data-highlight-spot-color="#7266ba" data-highlight-line-color="#7266ba" data-values="1,3,4,5,7,8" style="margin-bottom: -2px" data-resize="true"></div>
                  </div>
               </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                  <!-- START card-->
                  <div class="card bg-purple-light pt-2 b0">
                     <div class="px-2"><em class="fa fa-spinner fa-lg float-right"></em>
                        <div class="h2 mt-0">1</div>
                        <div class="text-uppercase">Aguardando Fornecedor</div>
                     </div>
                     <div data-sparkline="" data-type="line" data-width="100%" data-height="75px" data-line-color="#7266ba" data-chart-range-min="0" data-fill-color="#7266ba" data-spot-color="#7266ba" data-min-spot-color="#7266ba" data-max-spot-color="#7266ba" data-highlight-spot-color="#7266ba" data-highlight-line-color="#7266ba" data-values="1,3,4,5,7,8" style="margin-bottom: -2px" data-resize="true"></div>
                  </div>
               </div>
            </div><!-- END cards box-->
            <!-- START chart-->
            <div class="row">
               <div class="col-xl-12">
                  <!-- START card-->
                  <div class="card card-default" id="cardChart9">
                     <div class="card-header">
                        <div class="card-title">Chamados Abertos x Fechados</div>
                     </div>
                     <div class="card-wrapper">
                        <div class="card-body">
                           <div class="chart-splinev3 flot-chart"></div>
                        </div>
                     </div>
                  </div><!-- END card-->
               </div>
            </div><!-- END chart-->
         </div>
      </section><!-- Page footer-->

<?php include 'base/footer.php' ?>