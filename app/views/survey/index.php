<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Encuesta de salida </title>

    <!-- Bootstrap -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- PNotify -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/build/css/custom.min.css" rel="stylesheet">

    <script>
      var base_url = '<?=base_url()?>';
    </script>

    <style>
      .nav-md .container.body .right_col {
        padding    : 10px 20px 0;
        margin-left: 0px;
      }
      .page-title .title_left {
        width: 100%;
        float: left;
        display: block;
      }
      .investment_level{
        display: none;
      }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="container">

            <div class="row">
              <div class="col-md-12 col-xs-12 text-center">
                <img class="img-fluid" src="https://idealcoin.io/crm/assets/img/paymho-logo.png" alt="">
              </div>
            </div>

            <div class="page-title">
              <div class="title_left text-center">
                <h3>ENCUESTA DE SALIDA DE PLATICA IDEALCOIN</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            

            <div class="row">
              
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <!--<div class="x_title">
                    <h2>ENCUESTA DE SALIDA DE PLATICA IDEALCOIN </h2>
                    <div class="clearfix"></div>
                  </div>-->
                  <div class="x_content">
                    <br />
                    <form id="form_survery" class="form-horizontal form-label-left input_mask">

                      <div class="col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="name" name="name" placeholder="Nombre Completo">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="email" name="email" placeholder="Email">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="phone" name="phone" placeholder="Tel. Celular">
                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <!--<div class="col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="address" name="address" placeholder="Dirección">
                        <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                      </div>-->

                      <div class="col-xs-12  form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="reference" name="reference" placeholder="¿Quien te invito?">
                        <span class="fa fa-user-plus form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="form-group">
                        <div class="col-xs-12">
                          <select class="form-control" name="contact_method" id="contact_method">
                            <option value="">Metodo de contacto preferido</option>
                            <option value="whatsapp">WHATSAPP</option>
                            <option value="email">EMAIL</option>
                            <option value="telegram">TELEGRAM</option>
                            <option value="celular">CELULAR</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-xs-12">
                          <select class="form-control" name="interest_level" id="interest_level">
                            <option value="">Nivel de interes para invertir en IDEALCOIN</option>
                            <option value="muy_alto">MUY ALTO</option>
                            <option value="alto">ALTO</option>
                            <option value="medio">MEDIO</option>
                            <option value="poco">POCO</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-xs-12">
                          <select class="form-control" name="join_investment" id="join_investment">
                            <option value="">Quieres participar invirtiendo en nuestro proyecto?</option>
                            <option value="si">SI</option>
                            <option value="no">NO</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group investment_level">
                        <div class="col-xs-12">
                          <select class="form-control" name="investment_level" id="investment_level">
                            <option value="">Nivel de inversión en el que estarías interesad@ en participar</option>
                            <option value="1000">$ 1,000 USD O MÁS</option>
                            <option value="5000">$ 5,000 USD O MÁS</option>
                            <option value="10000">$ 10,000 USD O MÁS</option>
                          </select>
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-xs-12 col-md-offset-3">
                          <!--<button type="button" class="btn btn-primary">Cancel</button>
                              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Enviar</button>-->
                          <a onclick="submit_(); return false;" class="btn btn-success" href="#">Enviar</a>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>

               



              </div>

             



            </div>

            

            </div>



          
          </div>
        </div>
        <!-- /page content -->

    
      </div>
    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
      <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
      </ul>
      <div class="clearfix"></div>
      <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/moment/min/moment.min.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/starrr/dist/starrr.js"></script>
    <!-- PNotify -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/pnotify/dist/pnotify.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/build/js/custom.js?<?=md5(time())?>=<?=md5(time())?>"></script>

    <script>

      function validateEmail(email){
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
      }

      $('#join_investment').on('change', function(event) {
        var t = $(this).val();
        console.log(t);
        if(t == 'si'){
          $('.investment_level').show();
        }else{
          $('.investment_level').hide();
        }
      });

      function submit_(){

          var success = true;
          var data    = $('#form_survery').serialize();
          var email_  = $('#email').val();

          if(!validateEmail(email_)){
            console.log('Correo mal escrito');
            success = false;
          }

          if(success == true){

            $.ajax({
              method  : 'POST',
              url     : base_url+'Survey/save',
              dataType: 'json',
              data    : data
            }).done(function(r){

                new PNotify({
                    title  : r.title,
                    text   : r.text,
                    type   : r.code,
                    styling: 'bootstrap3'
                });

                if(r.code == 'success'){
                  $('#form_survery')[0].reset();
                }

            });

          }else{
              new PNotify({
                    title  : 'Advertencia',
                    text   : 'El correo no tiene un formato valido.',
                    type   : 'error',
                    styling: 'bootstrap3'
                });
          }

      }

      $(function(){

      });

    </script>


  </body>
</html>
