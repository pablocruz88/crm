<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRM</title>

    <!-- Bootstrap -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- PNotify -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/templates/gentelella-master/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url()?>assets/templates/gentelella-master/build/css/custom.min.css" rel="stylesheet">

    <script>
      var base_url = '<?=base_url()?>';
    </script>
  </head>

  <body class="login">
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="form_sign">
              <h1>CRM</h1>
              <div>
                <input type="text" class="form-control" id="email" name="email" placeholder="Correo" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Contraseña" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" onclick="submit_(); return false;">Entrar</a> 
                
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                
                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2018 Powered by Ideasreward</p>
                </div>
              </div>
            </form>
          </section>
        </div>

       
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

    <!-- PNotify -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/pnotify/dist/pnotify.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/pnotify/dist/pnotify.nonblock.js"></script>

    <script>

      function validateEmail(email){
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
      }

      function submit_(){

          var success = true;
          var data    = $('#form_sign').serialize();
          var email_  = $('#email').val();

          if(!validateEmail(email_)){
            success = false;
          }

          if(success == true){

            $.ajax({
              method  : 'POST',
              url     : base_url+'Dashboard/sign',
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
                  $('#form_sign')[0].reset();
                  setTimeout(function(){
                    location.href = base_url+'Prospects';
                  }, 1500);
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















