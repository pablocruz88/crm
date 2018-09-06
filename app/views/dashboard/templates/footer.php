    <!-- jQuery -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Switchery -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/vendors/switchery/dist/switchery.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?=base_url()?>assets/templates/gentelella-master/build/js/custom.min.js"></script>

    <script>

        function getData(prospect){

            $('.files_uploads').html('<div class="text-center"> <img src="'+base_url+'assets/img/gif-load.gif" /> </div>');

            var type_ = '';

            $.ajax({
                method  : 'POST',
                url     : base_url+'Prospects/get_files',
                dataType: 'json',
                data    : {'id_prospect':prospect},
            }).done(function(r){

                var t = '';

                $.each(r, function(i, v) {

                    switch (v.type_c) {

                        case 'com_fisica':
                            type_ = 'COM Física';
                            img_ = 'Microsoft_Word_2013_logo.svg';
                        break;

                        case 'com_moral':
                            type_ = 'COM Moral';
                            img_ = 'Microsoft_Word_2013_logo.svg';
                        break;

                        case 'mou_fisica':
                            type_ = 'MOU Física';
                            img_ = 'Microsoft_Word_2013_logo.svg';
                        break;

                        case 'mou_moral':
                            type_ = 'MOU Moral';
                            img_ = 'Microsoft_Word_2013_logo.svg';
                        break;

                        case 'nda_moral':
                            type_ = 'NDA Moral';
                            img_ = 'Microsoft_Word_2013_logo.svg';
                        break;

                        case 'nda_fisica':
                            type_ = 'NDA Física';
                            img_ = 'Microsoft_Word_2013_logo.svg';
                        break;

                        case 'comprobante':
                            type_ = 'Comprobante';
                            img_ = 'icono-tramite-1.png';
                        break;
                        
                    }

                    t += '<div class="col-md-3 text-center">';
                    t += '<a href="'+base_url+'assets/uploads/'+v.file+'"><img class="img-fluid" style="max-width:110px;" src="'+base_url+'assets/img/'+img_+'" alt="">';
                    t += 'COM Física</a>';
                t += '</div>';


                });

                $('.files_uploads').html(t);

            });

        }
        
        function formFiles(){
            var prospect = $(this).data('prospect');

            $('#id_prospect').val(prospect);

            getData(prospect);
            
            $('#filesModal').modal('show');
        }

        function upload_(){

            var inputFileImage = document.getElementById('userfile');
            var id_prospect    = $('#id_prospect').val();
            var type_c         = $('#type_c').val();
            var file           = inputFileImage.files[0];
            var data           = new FormData();

            data.append('userfile',file);
            data.append('id_prospect',id_prospect);
            data.append('type_c',type_c);
                                      
            $.ajax({
                url        : base_url+'Prospects/upload',
                dataType   : 'json',
                cache      : false,
                contentType: false,
                processData: false,
                data       : data,                         
                type       : 'post',
                success    : function(r){
                    getData(id_prospect);
                }
             });

        }

        function formContract(){
            var prospect = $(this).data('prospect');

            $('#prospect').val(prospect);

            $.ajax({
                method  : 'POST',
                url     : base_url+'Prospects/get_',
                dataType: 'json',
                data    : {'id':prospect},
            }).done(function(r){

                $('#name').val(r.name);
                $('#email').val(r.email);
                $('#phone').val(r.phone);
                $('#date').val(r.date);
                $('#reference').val(r.reference);

                $('#comitente').val(r.comitente);
                $('#comisionista').val(r.comisionista);
                $('#m_sociedad').val(r.m_sociedad);
                $('#m_e_publica').val(r.m_e_publica);
                $('#m_e_fecha').val(r.m_e_fecha);
                $('#m_notario').val(r.m_notario);
                $('#m_notaria').val(r.m_notaria);
                $('#m_municipio').val(r.m_municipio);
                $('#rfc_cliente').val(r.rfc_cliente);
                $('#cuenta').val(r.cuenta);
                $('#clabe').val(r.clabe);
                $('#nombre_cuenta').val(r.nombre_cuenta);
                $('#banco').val(r.banco);
                $('#vigencia').val(r.vigencia);
                $('#fecha_dia').val(r.fecha_dia);
                $('#fecha_mes').val(r.fecha_mes);
                $('#fecha_ano').val(r.fecha_ano);
                $('#prospecto').val(r.prospecto);
                $('#r_prospecto').val(r.r_prospecto);
                $('#identificacion').val(r.identificacion);
                $('#usd').val(r.usd);
                $('#usd_texto').val(r.usd_texto);
                $('#tipo_cambio').val(r.tipo_cambio);
                $('#idc').val(r.idc);
                $('#idc_texto').val(r.idc_texto);
                $('#fecha_completa').val(r.fecha_completa);
                $('#lugar').val(r.lugar);
                $('#socio').val(r.socio);

                $('#usd_texto_en').val(r.usd_texto_en);
                $('#idc_texto_en').val(r.idc_texto_en);
                $('#nda_pais').val(r.nda_pais);
                $('#nda_direccion').val(r.nda_direccion);
                $('#nda_email').val(r.nda_email);
                $('#hash').val(r.hash);

            });
            
            $('#exampleModal').modal('show');
        }

        function generate_(){

            var form_contract = $('#form_contract').serialize();
            var downloads_ = '';

            $.ajax({
                method  : 'POST',
                url     : base_url+'Prospects/validate_contract',
                dataType: 'json',
                data    : form_contract,
              }).done(function(r){


                downloads_ += '<div class="col-md-3 text-center">';
                    downloads_ += '<a href="'+base_url+'Contract/validate_contract/com_fisica/'+r.id+'"><img class="img-fluid" src="<?=base_url()?>assets/img/Microsoft_Word_2013_logo.svg" alt="">';
                    downloads_ += 'COM Física</a>';
                downloads_ += '</div>';
                downloads_ += '<div class="col-md-3 text-center">';
                    downloads_ += '<a href="'+base_url+'Contract/validate_contract/com_moral/'+r.id+'"><img class="img-fluid" src="<?=base_url()?>assets/img/Microsoft_Word_2013_logo.svg" alt="">';
                    downloads_ += 'COM Moral</a>';
                downloads_ += '</div>';
                downloads_ += '<div class="col-md-3 text-center">';
                    downloads_ += '<a href="'+base_url+'Contract/validate_contract/mou_moral/'+r.id+'"><img class="img-fluid" src="<?=base_url()?>assets/img/Microsoft_Word_2013_logo.svg" alt="">';
                    downloads_ += 'MOU Física</a>';
                downloads_ += '</div>';

                downloads_ += '<div class="col-md-3 text-center">';
                    downloads_ += '<a href="'+base_url+'Contract/validate_contract/mou_fisica/'+r.id+'"><img class="img-fluid" src="<?=base_url()?>assets/img/Microsoft_Word_2013_logo.svg" alt="">';
                    downloads_ += 'MOU Moral</a>';
                downloads_ += '</div>';

                downloads_ += '<div class="col-md-3 text-center">';
                    downloads_ += '<a href="'+base_url+'Contract/validate_contract/nda_moral/'+r.id+'"><img class="img-fluid" src="<?=base_url()?>assets/img/Microsoft_Word_2013_logo.svg" alt="">';
                    downloads_ += 'NDA Moral</a>';
                downloads_ += '</div>';

                downloads_ += '<div class="col-md-3 text-center">';
                    downloads_ += '<a href="'+base_url+'Contract/validate_contract/nda_fisica/'+r.id+'"><img class="img-fluid" src="<?=base_url()?>assets/img/Microsoft_Word_2013_logo.svg" alt="">';
                    downloads_ += 'NDA Física</a>';
                downloads_ += '</div>';

                $('.contracts_download').html(downloads_);


              });

        }

        $(function(){

        });

    </script>

  </body>
</html>
































