
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"> <span>IdealCoin CRM</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix text-center" style="background-color: #fff;">
              <div class="profile_pic">
                <img class="img-fluid" style="max-width: 100%;" src="https://idealcoin.io/wp-content/uploads/2018/07/ezgif.com-optimize.gif" alt="">
              </div>
              

            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li>
                        <a href="Prospects">Prospectos</a>
                        <a href="Encrypt">Links Referidos</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
             

            </div>
            <!-- /sidebar menu -->

          

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <?=$logged_name?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="Dashboard/logout">     <i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                  </ul>
                </li>

               
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Prospectos <small>Lista de prospectos registrados en la App</small></h3>
              </div>

              <!--<div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>-->

            </div>

            <div class="clearfix"></div>

            <div class="row">
              
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Imprimir contrato</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      En este listado se encuentran los prospectos y se puede editar la información (verificar información, subir ine y domicilio)
                    </p>

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
                          <th></th>
                          <th></th>
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
                            <td>
                              <a class="btn btn-primary" id="<?=$d->id?>" data-prospect="<?=$d->id?>" onclick="formContract.call(this); return false;"> Generar Contratos </a>
                            </td>
                            <td>
                              <a class="btn btn-primary" id="<?=$d->id?>" data-prospect="<?=$d->id?>" onclick="formFiles.call(this); return false;"> Archivos </a>
                            </td>
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
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Imprimir Contratos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="form_contract">

        <input type="hidden" name="prospect" id="prospect">

          <div class="form-group col-md-4 com_">
            <label for="name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" name="name" id="name">
          </div>

          <div class="form-group col-md-4 com_">
            <label for="email" class="col-form-label">Correo:</label>
            <input type="text" class="form-control" name="email" id="email">
          </div> 

          <div class="form-group col-md-4 com_">
            <label for="phone" class="col-form-label">Teléfono:</label>
            <input type="text" class="form-control" name="phone" id="phone">
          </div> 

          <div class="form-group col-md-4 com_">
            <label for="date" class="col-form-label">Fecha:</label>
            <input type="text" class="form-control" name="date" id="date">
          </div>

          <div class="form-group col-md-4 com_">
            <label for="reference" class="col-form-label">Referido:</label>
            <input type="text" class="form-control" name="reference" id="reference">
          </div> 

          <div class="form-group col-md-4 com_">
            <label for="comitente" class="col-form-label">Comitente:</label>
            <input type="text" class="form-control" name="comitente" id="comitente">
          </div>
          <div class="form-group col-md-4 com_">
            <label for="comisionista" class="col-form-label">Comisionista:</label>
            <input type="text" class="form-control" name="comisionista" id="comisionista">
          </div>
          <div class="form-group col-md-4 com_">
            <label for="m_sociedad" class="col-form-label">M. Sociedad:</label>
            <input type="text" class="form-control" name="m_sociedad" id="m_sociedad">
          </div>
          <div class="form-group col-md-4 com_">
            <label for="m_e_publica" class="col-form-label">M. E. Publica:</label>
            <input type="text" class="form-control" name="m_e_publica" id="m_e_publica">
          </div>
          <div class="form-group col-md-4 com_">
            <label for="m_e_fecha" class="col-form-label">M. E. Fecha:</label>
            <input type="text" class="form-control" name="m_e_fecha" id="m_e_fecha">
          </div>
          <div class="form-group col-md-4 com_">
            <label for="m_notario" class="col-form-label">M. Notario:</label>
            <input type="text" class="form-control" name="m_notario" id="m_notario">
          </div>
          <div class="form-group col-md-4 com_">
            <label for="m_notaria" class="col-form-label">M. Notaria:</label>
            <input type="text" class="form-control" name="m_notaria" id="m_notaria">
          </div>
          <div class="form-group col-md-4 com_">
            <label for="m_municipio" class="col-form-label">M. Municipio:</label>
            <input type="text" class="form-control" name="m_municipio" id="m_municipio">
          </div>
          <div class="form-group col-md-4 com_">
            <label for="rfc_cliente" class="col-form-label">RFC Cliente:</label>
            <input type="text" class="form-control" name="rfc_cliente" id="rfc_cliente">
          </div>
          <div class="form-group col-md-4 com_">
            <label for="cuenta" class="col-form-label">Cuenta:</label>
            <input type="text" class="form-control" name="cuenta" id="cuenta">
          </div>
          <div class="form-group col-md-4 com_">
            <label for="clabe" class="col-form-label">Clabe:</label>
            <input type="text" class="form-control" name="clabe" id="clabe">
          </div>
          <div class="form-group col-md-4 com_">
            <label for="nombre_cuenta" class="col-form-label">Titúlar de Cuenta:</label>
            <input type="text" class="form-control" name="nombre_cuenta" id="nombre_cuenta">
          </div>
          <div class="form-group col-md-4 com_">
            <label for="banco" class="col-form-label">Banco:</label>
            <input type="text" class="form-control" name="banco" id="banco">
          </div>
          <div class="form-group col-md-4 com_">
            <label for="vigencia" class="col-form-label">Vigencia:</label>
            <input type="text" class="form-control" name="vigencia" id="vigencia">
          </div>
          <div class="form-group col-md-4 com_">
            <label for="fecha_dia" class="col-form-label">Fecha Día:</label>
            <input type="text" class="form-control" name="fecha_dia" id="fecha_dia">
          </div>
          <div class="form-group col-md-4 com_">
            <label for="fecha_mes" class="col-form-label">Fecha Mes:</label>
            <input type="text" class="form-control" name="fecha_mes" id="fecha_mes">
          </div>
          <div class="form-group col-md-4 com_">
            <label for="fecha_ano" class="col-form-label">Fecha Año:</label>
            <input type="text" class="form-control" name="fecha_ano" id="fecha_ano">
          </div>

          <div class="form-group col-md-4 mou_">
            <label for="prospecto" class="col-form-label">Prospecto:</label>
            <input type="text" class="form-control" name="prospecto" id="prospecto">
          </div>
          <div class="form-group col-md-4 mou_">
            <label for="r_prospecto" class="col-form-label">R. Prospecto:</label>
            <input type="text" class="form-control" name="r_prospecto" id="r_prospecto">
          </div>
          <div class="form-group col-md-4 mou_">
            <label for="identificacion" class="col-form-label">Identificación:</label>
            <input type="text" class="form-control" name="identificacion" id="identificacion">
          </div>
          <div class="form-group col-md-4 mou_">
            <label for="usd" class="col-form-label">USD:</label>
            <input type="text" class="form-control" name="usd" id="usd">
          </div>
         <!-- <div class="form-group col-md-4 mou_">
            <label for="usd_texto" class="col-form-label">USD Texto ES:</label>
            <input type="text" class="form-control" name="usd_texto" id="usd_texto">
          </div>
          <div class="form-group col-md-4 mou_">
            <label for="usd_texto_en" class="col-form-label">USD Texto EN:</label>
            <input type="text" class="form-control" name="usd_texto_en" id="usd_texto_en">
          </div>-->
          <div class="form-group col-md-4 mou_">
            <label for="tipo_cambio" class="col-form-label">Tipo de Cambio:</label>
            <input type="text" class="form-control" name="tipo_cambio" id="tipo_cambio">
          </div>
          <div class="form-group col-md-4 mou_">
            <label for="idc" class="col-form-label">IDC:</label>
            <input type="text" class="form-control" name="idc" id="idc">
          </div>
          <!--<div class="form-group col-md-4 mou_">
            <label for="idc_texto" class="col-form-label">IDC Texto ES:</label>
            <input type="text" class="form-control" name="idc_texto" id="idc_texto">
          </div>
          <div class="form-group col-md-4 mou_">
            <label for="idc_texto_en" class="col-form-label">IDC Texto EN:</label>
            <input type="text" class="form-control" name="idc_texto_en" id="idc_texto_en">
          </div>-->
          <div class="form-group col-md-4 mou_">
            <label for="fecha_completa" class="col-form-label">Fecha Completa:</label>
            <input type="text" class="form-control" name="fecha_completa" id="fecha_completa">
          </div>
          <div class="form-group col-md-4 mou_">
            <label for="lugar" class="col-form-label">Lugar:</label>
            <input type="text" class="form-control" name="lugar" id="lugar">
          </div>
          <div class="form-group col-md-4 mou_">
            <label for="socio" class="col-form-label">Socio:</label>
            <input type="text" class="form-control" name="socio" id="socio">
          </div>

          <div class="form-group col-md-4 mou_">
            <label for="nda_pais" class="col-form-label">NDA País:</label>
            <input type="text" class="form-control" name="nda_pais" id="nda_pais">
          </div>

          <div class="form-group col-md-4 mou_">
            <label for="nda_direccion" class="col-form-label">NDA Dirección:</label>
            <input type="text" class="form-control" name="nda_direccion" id="nda_direccion">
          </div>

          <div class="form-group col-md-4 mou_">
            <label for="nda_email" class="col-form-label">NDA Email:</label>
            <input type="text" class="form-control" name="nda_email" id="nda_email">
          </div>

          <div class="form-group col-md-4 mou_">
            <label for="hash" class="col-form-label">Wallet (Hash):</label>
            <input type="text" class="form-control" name="hash" id="hash">
          </div>

        </form>

        <div class="row contracts_download">
          
          
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <a class="btn btn-primary" onclick="generate_()">Generar</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="filesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Subir archivos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="form_files">

        <input type="hidden" name="id_prospect" id="id_prospect">

          <div class="form-group col-md-12">
            <label for="userfile" class="col-form-label">Tipo de archivo:</label>
            <select name="type_c" id="type_c">
              <option value="com_fisica">COM Física</option>
              <option value="com_moral">COM Moral</option>
              <option value="mou_fisica">MOU Física</option>
              <option value="mou_moral">MOU Moral</option>
              <option value="nda_moral">NDA Moral</option>
              <option value="nda_fisica">NDA Física</option>
              <option value="comprobante">Comprobante</option>
            </select>
          </div>

          <div class="form-group col-md-12">
            <label for="userfile" class="col-form-label">Archivo:</label>
            <input type="file" class="form-control" name="userfile" id="userfile">
          </div>

        </form>

        <div class="row files_uploads">
          
          
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <a class="btn btn-primary" onclick="upload_()">Guardar</a>
      </div>
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
























