<?/*
File Name    : report.php
Date Created : 2018-08-24
Author     : Julián Zepeda
Description  : This is the view of the report from the referenced people
*/?>
    <div class="container body">
      <div class="main_container">
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Reporte de referencias </h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Referido: <?=$name?></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nombre</th>
                          <th>Correo</th>
                          <th>Teléfono</th>
                          <th>Fecha</th>
                          <th>Referido</th>
                          <th>Metodo de contacto</th>
                          <th>Interes</th>
                          <th>Inversión</th>
                          <th>Monto</th>
                        </tr>
                      </thead>

                      <tbody>
                        <? foreach($data as $d):?>
                          <tr>
                            <td><?=$d->id?></td>
                            <td><?=$d->name?></td>
                            <td><?=$d->email?></td>
                            <td><?=$d->phone?></td>
                            <td><?=$d->date?></td>
                            <td><?=$d->reference?></td>
                            <td><?=$d->contact_method?></td>
                            <td><?=$d->interest_level?></td>
                            <td><?=$d->join_investment?></td>
                            <td><?=$d->investment_level?></td>
                          </tr>
                        <? endforeach?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              
            </div>
          </div>
        </div>
        <!-- /page content -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    
    </div>
  </div>
</div>

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            IdealCoin - CRM powered by <a href="https://ideasreward.com">Ideasreward</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
























