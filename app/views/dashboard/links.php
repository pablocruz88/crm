<!-- 
File Name    : links.php
Date Created : 2018-09-05
Author     : Julián Zepeda
Description  : This is the view to show the people referenced by the prospects and show the hash, if you click on the name, the page redirect to the view for the referenced people

-->
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
                    <li><a href="Dashboard/logout">  <i class="fa fa-sign-out pull-right"></i> Salir</a></li>
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
                <h3>Links Referidos</h3> 
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
                  <!--<div class="x_title">
                    <h2>Imprimir contrato</h2>
                    <div class="clearfix"></div>
                  </div>-->
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      En este listado se encuentran los referidos por los prospectos, se puede dar clic en el nombre de estos y te redirecciona al link que se le debe de enviar al referido para que cheque el status de su prospecto.
                    </p>

                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Hash</th>
                        </tr>
                      </thead>

                      <tbody>
                        <? foreach($a as $k => $v):?>
                          <tr>
                            <td>
                              <?
                              echo '<a target="_blank" href="https://idealcoin.io/crm/Report?d='.base64_encode($v->reference).'"> '.$v->reference.'</a>';
                              ?>
                            </td>
                            <td>
                              <?
                                echo '<a target="_blank" href="https://idealcoin.io/crm/Report?d='.base64_encode($v->reference).'"> '.base64_encode($v->reference).'</a>';
                              ?>                                
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
























