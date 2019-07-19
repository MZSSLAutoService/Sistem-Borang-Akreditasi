    <!-- Jquery Core Js -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <!-- <script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script> -->

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="{{ asset('plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('plugins/node-waves/waves.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>
    
    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Morris Plugin Js -->
    <!-- <script src="plugins/raphael/raphael.min.js"></script>
    <script src="{{ asset('plugins/morrisjs/morris.js') }}"></script> -->

    <!-- TinyMCE -->
    <script src="{{ asset('plugins/tinymce/tinymce.js') }}"></script>

    <!-- Ckeditor --
    <script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>-->

    <!-- SweetAlert Plugin Js -->
    <script src="{{ asset('plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="{{ asset('plugins/jquery-steps/jquery.steps.js') }}"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

    <!-- Autosize Plugin Js -->
    <script src="{{ asset('plugins/autosize/autosize.js') }}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{ asset('plugins/momentjs/moment.js') }}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('js/backend/admin.js') }}"></script>
    <!--Admin-->
    <!-- <script src="{{ asset('js/backend/pages/index.js') }}"></script> -->
    <!-- <script src="{{ asset('js/pages/examples/sign-up.js') }}"></script>
    <script src="{{ asset('js/pages/examples/sign-in.js') }}"></script> -->
    <!--Non Admin-->
    <script src="{{ asset('js/backend/pages/tables/jquery-datatable.js') }}"></script>
    <!-- <script src="{{ asset('js/backend/pages/ui/modals.js') }}"></script> -->
    <!-- <script src="{{ asset('js/backend/pages/forms/editors.js') }}"></script> -->
    <script src="{{ asset('js/backend/pages/ui/dialogs.js') }}"></script>
    <script src="{{ asset('js/backend/pages/forms/form-wizard.js') }}"></script>
    <script src="{{ asset('js/backend/pages/forms/basic-form-elements.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('js/backend/demo.js') }}"></script>

    <!-- <script src="{{ asset('js/reg.js') }}"></script> -->
   
  <!-- CKEditor -->
  <script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>
  <script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize  : 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
  </script>
    <script>
        $(function(){
            //LKPS C2
            $('#cmp4, #cmp3, #cmp2, #cmp1, #cmp0').keyup(function(){
                var value1 = parseFloat($('#cmp4').val()) || 0;
                var value2 = parseFloat($('#cmp3').val()) || 0;
                var value3 = parseFloat($('#cmp2').val()) || 0;
                var value4 = parseFloat($('#cmp1').val()) || 0;
                var value5 = parseFloat($('#cmp0').val()) || 0;
               $('#na').val(value1 + value2 + value3 + value4 + value5);
            });

            $('#cmls4, #cmls3, #cmls2, #cmls1, #cmls0').keyup(function(){
                var value1 = parseFloat($('#cmls4').val()) || 0;
                var value2 = parseFloat($('#cmls3').val()) || 0;
                var value3 = parseFloat($('#cmls2').val()) || 0;
                var value4 = parseFloat($('#cmls1').val()) || 0;
                var value5 = parseFloat($('#cmls0').val()) || 0;
               $('#nb').val(value1 + value2 + value3 + value4 + value5);
            });

            $('#mbr4, #mbr3, #mbr2, #mbr1, #mbr0').keyup(function(){
                var value1 = parseFloat($('#mbr4').val()) || 0;
                var value2 = parseFloat($('#mbr3').val()) || 0;
                var value3 = parseFloat($('#mbr2').val()) || 0;
                var value4 = parseFloat($('#mbr1').val()) || 0;
                var value5 = parseFloat($('#mbr0').val()) || 0;
               $('#nc').val(value1 + value2 + value3 + value4 + value5);
            });

            $('#mbt4, #mbt3, #mbt2, #mbt1, #mbt0').keyup(function(){
                var value1 = parseFloat($('#mbt4').val()) || 0;
                var value2 = parseFloat($('#mbt3').val()) || 0;
                var value3 = parseFloat($('#mbt2').val()) || 0;
                var value4 = parseFloat($('#mbt1').val()) || 0;
                var value5 = parseFloat($('#mbt0').val()) || 0;
               $('#nd').val(value1 + value2 + value3 + value4 + value5);
            });

            $('#nrst, #ntts').keyup(function(){
                var value1 = parseFloat($('#nrst').val()) || 0;
                var value2 = parseFloat($('#ntts').val()) || 0;
               $('#nm').val(value1 + value2);
            });

            //LKPS C4
            //UPPS
                $('#TS2uppsbop, #TS2uppsbd, #TS2uppsbtk, #TS2uppsbopm, #TS2uppsbotl, #TS2uppsbok').keyup(function(){
                    var value1 = parseFloat($('#TS2uppsbop').val()) || 0;
                    var value2 = parseFloat($('#TS2uppsbd').val()) || 0;
                    var value3 = parseFloat($('#TS2uppsbtk').val()) || 0;
                    var value4 = parseFloat($('#TS2uppsbopm').val()) || 0;
                    var value5 = parseFloat($('#TS2uppsbotl').val()) || 0;
                    var value6 = parseFloat($('#TS2uppsbok').val()) || 0;
                $('#jml1TS2upps').val(value1 + value2 + value3 + value4 + value5 +value6 );
                });

                $('#TS1uppsbop, #TS1uppsbd, #TS1uppsbtk, #TS1uppsbopm, #TS1uppsbotl, #TS1uppsbok').keyup(function(){
                    var value1 = parseFloat($('#TS1uppsbop').val()) || 0;
                    var value2 = parseFloat($('#TS1uppsbd').val()) || 0;
                    var value3 = parseFloat($('#TS1uppsbtk').val()) || 0;
                    var value4 = parseFloat($('#TS1uppsbopm').val()) || 0;
                    var value5 = parseFloat($('#TS1uppsbotl').val()) || 0;
                    var value6 = parseFloat($('#TS1uppsbok').val()) || 0;
                $('#jml1TS1upps').val(value1 + value2 + value3 + value4 + value5 +value6 );
                });

                $('#TSuppsbop, #TSuppsbd, #TSuppsbtk, #TSuppsbopm, #TSuppsbotl, #TSuppsbok').keyup(function(){
                    var value1 = parseFloat($('#TSuppsbop').val()) || 0;
                    var value2 = parseFloat($('#TSuppsbd').val()) || 0;
                    var value3 = parseFloat($('#TSuppsbtk').val()) || 0;
                    var value4 = parseFloat($('#TSuppsbopm').val()) || 0;
                    var value5 = parseFloat($('#TSuppsbotl').val()) || 0;
                    var value6 = parseFloat($('#TSuppsbok').val()) || 0;
                $('#jml1TSupps').val(value1 + value2 + value3 + value4 + value5 +value6 );
                });

                $('#TS2uppsbp, #TS2uppsbpkm').keyup(function(){
                    var value1 = parseFloat($('#TS2uppsbp').val()) || 0;
                    var value2 = parseFloat($('#TS2uppsbpkm').val()) || 0;
                $('#jml2TS2upps').val(value1 + value2 );
                });

                $('#TS1uppsbp, #TS1uppsbpkm').keyup(function(){
                    var value1 = parseFloat($('#TS1uppsbp').val()) || 0;
                    var value2 = parseFloat($('#TS1uppsbpkm').val()) || 0;
                $('#jml2TS1upps').val(value1 + value2 );
                });

                $('#TSuppsbp, #TSuppsbpkm').keyup(function(){
                    var value1 = parseFloat($('#TSuppsbp').val()) || 0;
                    var value2 = parseFloat($('#TSuppsbpkm').val()) || 0;
                $('#jml2TSupps').val(value1 + value2 );
                });

                $('#TS2uppsbsdm, #TS2uppsbsrn, #TS2uppsbpsrn').keyup(function(){
                    var value1 = parseFloat($('#TS2uppsbsdm').val()) || 0;
                    var value2 = parseFloat($('#TS2uppsbsrn').val()) || 0;
                    var value3 = parseFloat($('#TS2uppsbpsrn').val()) || 0;
                $('#jml3TS2upps').val(value1 + value2 + value3 );
                });

                $('#TS1uppsbsdm, #TS1uppsbsrn, #TS1uppsbpsrn').keyup(function(){
                    var value1 = parseFloat($('#TS1uppsbsdm').val()) || 0;
                    var value2 = parseFloat($('#TS1uppsbsrn').val()) || 0;
                    var value3 = parseFloat($('#TS1uppsbpsrn').val()) || 0;
                $('#jml3TS1upps').val(value1 + value2 + value3 );
                });

                $('#TSuppsbsdm, #TSuppsbsrn, #TSuppsbpsrn').keyup(function(){
                    var value1 = parseFloat($('#TSuppsbsdm').val()) || 0;
                    var value2 = parseFloat($('#TSuppsbsrn').val()) || 0;
                    var value3 = parseFloat($('#TSuppsbpsrn').val()) || 0;
                $('#jml3TSupps').val(value1 + value2 + value3 );
                });

            //Rata-Rata UPPS
                $('#TS2uppsbop, #TS1uppsbop, #TSuppsbop').keyup(function(){
                    var value1 = parseFloat($('#TS2uppsbop').val()) || 0;
                    var value2 = parseFloat($('#TS1uppsbop').val()) || 0;
                    var value3 = parseFloat($('#TSuppsbop').val()) || 0;
                $('#RATuppsbop').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2uppsbd, #TS1uppsbd, #TSuppsbd').keyup(function(){
                    var value1 = parseFloat($('#TS2uppsbd').val()) || 0;
                    var value2 = parseFloat($('#TS1uppsbd').val()) || 0;
                    var value3 = parseFloat($('#TSuppsbd').val()) || 0;
                $('#RATuppsbd').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2uppsbtk, #TS1uppsbtk, #TSuppsbtk').keyup(function(){
                    var value1 = parseFloat($('#TS2uppsbtk').val()) || 0;
                    var value2 = parseFloat($('#TS1uppsbtk').val()) || 0;
                    var value3 = parseFloat($('#TSuppsbtk').val()) || 0;
                $('#RATuppsbtk').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2uppsbopm, #TS1uppsbopm, #TSuppsbopm').keyup(function(){
                    var value1 = parseFloat($('#TS2uppsbopm').val()) || 0;
                    var value2 = parseFloat($('#TS1uppsbopm').val()) || 0;
                    var value3 = parseFloat($('#TSuppsbopm').val()) || 0;
                $('#RATuppsbopm').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2uppsbotl, #TS1uppsbotl, #TSuppsbotl').keyup(function(){
                    var value1 = parseFloat($('#TS2uppsbotl').val()) || 0;
                    var value2 = parseFloat($('#TS1uppsbotl').val()) || 0;
                    var value3 = parseFloat($('#TSuppsbotl').val()) || 0;
                $('#RATuppsbotl').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2uppsbok, #TS1uppsbok, #TSuppsbok').keyup(function(){
                    var value1 = parseFloat($('#TS2uppsbok').val()) || 0;
                    var value2 = parseFloat($('#TS1uppsbok').val()) || 0;
                    var value3 = parseFloat($('#TSuppsbok').val()) || 0;
                $('#RATuppsbok').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2uppsbp, #TS1uppsbp, #TSuppsbp').keyup(function(){
                    var value1 = parseFloat($('#TS2uppsbp').val()) || 0;
                    var value2 = parseFloat($('#TS1uppsbp').val()) || 0;
                    var value3 = parseFloat($('#TSuppsbp').val()) || 0;
                $('#RATuppsbp').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2uppsbpkm, #TS1uppsbpkm, #TSuppsbpkm').keyup(function(){
                    var value1 = parseFloat($('#TS2uppsbpkm').val()) || 0;
                    var value2 = parseFloat($('#TS1uppsbpkm').val()) || 0;
                    var value3 = parseFloat($('#TSuppsbpkm').val()) || 0;
                $('#RATuppsbpkm').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2uppsbsdm, #TS1uppsbsdm, #TSuppsbsdm').keyup(function(){
                    var value1 = parseFloat($('#TS2uppsbsdm').val()) || 0;
                    var value2 = parseFloat($('#TS1uppsbsdm').val()) || 0;
                    var value3 = parseFloat($('#TSuppsbsdm').val()) || 0;
                $('#RATuppsbsdm').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2uppsbsrn, #TS1uppsbsrn, #TSuppsbsrn').keyup(function(){
                    var value1 = parseFloat($('#TS2uppsbsrn').val()) || 0;
                    var value2 = parseFloat($('#TS1uppsbsrn').val()) || 0;
                    var value3 = parseFloat($('#TSuppsbsrn').val()) || 0;
                $('#RATuppsbsrn').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2uppsbpsrn, #TS1uppsbpsrn, #TSuppsbpsrn').keyup(function(){
                    var value1 = parseFloat($('#TS2uppsbpsrn').val()) || 0;
                    var value2 = parseFloat($('#TS1uppsbpsrn').val()) || 0;
                    var value3 = parseFloat($('#TSuppsbpsrn').val()) || 0;
                $('#RATuppsbpsrn').val((value1 + value2 + value3) / 3 );
                });
                

            //PS
                $('#TS2psbop, #TS2psbd, #TS2psbtk, #TS2psbopm, #TS2psbotl, #TS2psbok').keyup(function(){
                    var value1 = parseFloat($('#TS2psbop').val()) || 0;
                    var value2 = parseFloat($('#TS2psbd').val()) || 0;
                    var value3 = parseFloat($('#TS2psbtk').val()) || 0;
                    var value4 = parseFloat($('#TS2psbopm').val()) || 0;
                    var value5 = parseFloat($('#TS2psbotl').val()) || 0;
                    var value6 = parseFloat($('#TS2psbok').val()) || 0;
                $('#jml1TS2ps').val(value1 + value2 + value3 + value4 + value5 +value6 );
                });

                $('#TS1psbop, #TS1psbd, #TS1psbtk, #TS1psbopm, #TS1psbotl, #TS1psbok').keyup(function(){
                    var value1 = parseFloat($('#TS1psbop').val()) || 0;
                    var value2 = parseFloat($('#TS1psbd').val()) || 0;
                    var value3 = parseFloat($('#TS1psbtk').val()) || 0;
                    var value4 = parseFloat($('#TS1psbopm').val()) || 0;
                    var value5 = parseFloat($('#TS1psbotl').val()) || 0;
                    var value6 = parseFloat($('#TS1psbok').val()) || 0;
                $('#jml1TS1ps').val(value1 + value2 + value3 + value4 + value5 +value6 );
                });

                $('#TSpsbop, #TSpsbd, #TSpsbtk, #TSpsbopm, #TSpsbotl, #TSpsbok').keyup(function(){
                    var value1 = parseFloat($('#TSpsbop').val()) || 0;
                    var value2 = parseFloat($('#TSpsbd').val()) || 0;
                    var value3 = parseFloat($('#TSpsbtk').val()) || 0;
                    var value4 = parseFloat($('#TSpsbopm').val()) || 0;
                    var value5 = parseFloat($('#TSpsbotl').val()) || 0;
                    var value6 = parseFloat($('#TSpsbok').val()) || 0;
                $('#jml1TSps').val(value1 + value2 + value3 + value4 + value5 +value6 );
                });

                $('#TS2psbp, #TS2psbpkm').keyup(function(){
                    var value1 = parseFloat($('#TS2psbp').val()) || 0;
                    var value2 = parseFloat($('#TS2psbpkm').val()) || 0;
                $('#jml2TS2ps').val(value1 + value2 );
                });

                $('#TS1psbp, #TS1psbpkm').keyup(function(){
                    var value1 = parseFloat($('#TS1psbp').val()) || 0;
                    var value2 = parseFloat($('#TS1psbpkm').val()) || 0;
                $('#jml2TS1ps').val(value1 + value2 );
                });

                $('#TSpsbp, #TSpsbpkm').keyup(function(){
                    var value1 = parseFloat($('#TSpsbp').val()) || 0;
                    var value2 = parseFloat($('#TSpsbpkm').val()) || 0;
                $('#jml2TSps').val(value1 + value2 );
                });

                $('#TS2psbsdm, #TS2psbsrn, #TS2psbpsrn').keyup(function(){
                    var value1 = parseFloat($('#TS2psbsdm').val()) || 0;
                    var value2 = parseFloat($('#TS2psbsrn').val()) || 0;
                    var value3 = parseFloat($('#TS2psbpsrn').val()) || 0;
                $('#jml3TS2ps').val(value1 + value2 + value3 );
                });

                $('#TS1psbsdm, #TS1psbsrn, #TS1psbpsrn').keyup(function(){
                    var value1 = parseFloat($('#TS1psbsdm').val()) || 0;
                    var value2 = parseFloat($('#TS1psbsrn').val()) || 0;
                    var value3 = parseFloat($('#TS1psbpsrn').val()) || 0;
                $('#jml3TS1ps').val(value1 + value2 + value3 );
                });

                $('#TSpsbsdm, #TSpsbsrn, #TSpsbpsrn').keyup(function(){
                    var value1 = parseFloat($('#TSpsbsdm').val()) || 0;
                    var value2 = parseFloat($('#TSpsbsrn').val()) || 0;
                    var value3 = parseFloat($('#TSpsbpsrn').val()) || 0;
                $('#jml3TSps').val(value1 + value2 + value3 );
                });

            //Rata-Rata PS
                $('#TS2psbop, #TS1psbop, #TSpsbop').keyup(function(){
                    var value1 = parseFloat($('#TS2psbop').val()) || 0;
                    var value2 = parseFloat($('#TS1psbop').val()) || 0;
                    var value3 = parseFloat($('#TSpsbop').val()) || 0;
                $('#RATpsbop').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2psbd, #TS1psbd, #TSpsbd').keyup(function(){
                    var value1 = parseFloat($('#TS2psbd').val()) || 0;
                    var value2 = parseFloat($('#TS1psbd').val()) || 0;
                    var value3 = parseFloat($('#TSpsbd').val()) || 0;
                $('#RATpsbd').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2psbtk, #TS1psbtk, #TSpsbtk').keyup(function(){
                    var value1 = parseFloat($('#TS2psbtk').val()) || 0;
                    var value2 = parseFloat($('#TS1psbtk').val()) || 0;
                    var value3 = parseFloat($('#TSpsbtk').val()) || 0;
                $('#RATpsbtk').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2psbopm, #TS1psbopm, #TSpsbopm').keyup(function(){
                    var value1 = parseFloat($('#TS2psbopm').val()) || 0;
                    var value2 = parseFloat($('#TS1psbopm').val()) || 0;
                    var value3 = parseFloat($('#TSpsbopm').val()) || 0;
                $('#RATpsbopm').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2psbotl, #TS1psbotl, #TSpsbotl').keyup(function(){
                    var value1 = parseFloat($('#TS2psbotl').val()) || 0;
                    var value2 = parseFloat($('#TS1psbotl').val()) || 0;
                    var value3 = parseFloat($('#TSpsbotl').val()) || 0;
                $('#RATpsbotl').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2psbok, #TS1psbok, #TSpsbok').keyup(function(){
                    var value1 = parseFloat($('#TS2psbok').val()) || 0;
                    var value2 = parseFloat($('#TS1psbok').val()) || 0;
                    var value3 = parseFloat($('#TSpsbok').val()) || 0;
                $('#RATpsbok').val((value1 + value2 + value3) / 3 );
                });
                
                $('#TS2psbp, #TS1psbp, #TSpsbp').keyup(function(){
                    var value1 = parseFloat($('#TS2psbp').val()) || 0;
                    var value2 = parseFloat($('#TS1psbp').val()) || 0;
                    var value3 = parseFloat($('#TSpsbp').val()) || 0;
                $('#RATpsbp').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2psbpkm, #TS1psbpkm, #TSpsbpkm').keyup(function(){
                    var value1 = parseFloat($('#TS2psbpkm').val()) || 0;
                    var value2 = parseFloat($('#TS1psbpkm').val()) || 0;
                    var value3 = parseFloat($('#TSpsbpkm').val()) || 0;
                $('#RATpsbpkm').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2psbsdm, #TS1psbsdm, #TSpsbsdm').keyup(function(){
                    var value1 = parseFloat($('#TS2psbsdm').val()) || 0;
                    var value2 = parseFloat($('#TS1psbsdm').val()) || 0;
                    var value3 = parseFloat($('#TSpsbsdm').val()) || 0;
                $('#RATpsbsdm').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2psbsrn, #TS1psbsrn, #TSpsbsrn').keyup(function(){
                    var value1 = parseFloat($('#TS2psbsrn').val()) || 0;
                    var value2 = parseFloat($('#TS1psbsrn').val()) || 0;
                    var value3 = parseFloat($('#TSpsbsrn').val()) || 0;
                $('#RATpsbsrn').val((value1 + value2 + value3) / 3 );
                });

                $('#TS2psbpsrn, #TS1psbpsrn, #TSpsbpsrn').keyup(function(){
                    var value1 = parseFloat($('#TS2psbpsrn').val()) || 0;
                    var value2 = parseFloat($('#TS1psbpsrn').val()) || 0;
                    var value3 = parseFloat($('#TSpsbpsrn').val()) || 0;
                $('#RATpsbpsrn').val((value1 + value2 + value3) / 3 );
                });

         
         
         
         
            //Total
                $('#jml1TS2upps, #jml2TS2upps, #jml3TS2upps').keyup(function(){
                    var value1 = parseFloat($('#jml1TS2upps').val()) || 0;
                    var value2 = parseFloat($('#jml2TS2upps').val()) || 0;
                    var value3 = parseFloat($('#jml3TS2upps').val()) || 0;
                $('#totalTS2upps').val(value1 + value2 + value3 );
                });

                $('#jml1TS1upps, #jml2TS1upps, #jml3TS1upps').keyup(function(){
                    var value1 = parseFloat($('#jml1TS1upps').val()) || 0;
                    var value2 = parseFloat($('#jml2TS1upps').val()) || 0;
                    var value3 = parseFloat($('#jml3TS1upps').val()) || 0;
                $('#totalTS1upps').val(value1 + value2 + value3 );
                });

                $('#jml1TSupps, #jml2TSupps, #jml3TSupps').keyup(function(){
                    var value1 = parseFloat($('#jml1TSupps').val()) || 0;
                    var value2 = parseFloat($('#jml2TSupps').val()) || 0;
                    var value3 = parseFloat($('#jml3TSupps').val()) || 0;
                $('#totalTSupps').val(value1 + value2 + value3 );
                });

                $('#jml1TS2ps, #jml2TS2ps, #jml3TS2ps').keyup(function(){
                    var value1 = parseFloat($('#jml1TS2ps').val()) || 0;
                    var value2 = parseFloat($('#jml2TS2ps').val()) || 0;
                    var value3 = parseFloat($('#jml3TS2ps').val()) || 0;
                $('#totalTS2ps').val(value1 + value2 + value3 );
                });

                $('#jml1TS1ps, #jml2TS1ps, #jml3TS1ps').keyup(function(){
                    var value1 = parseFloat($('#jml1TS1ps').val()) || 0;
                    var value2 = parseFloat($('#jml2TS1ps').val()) || 0;
                    var value3 = parseFloat($('#jml3TS1ps').val()) || 0;
                $('#totalTS1ps').val(value1 + value2 + value3 );
                });

                $('#jml1TSps, #jml2TSps, #jml3TSps').keyup(function(){
                    var value1 = parseFloat($('#jml1TSps').val()) || 0;
                    var value2 = parseFloat($('#jml2TSps').val()) || 0;
                    var value3 = parseFloat($('#jml3TSps').val()) || 0;
                $('#totalTSps').val(value1 + value2 + value3 );
                });

                //LKPSC5
                $('#Aspk1_sb, #Aspk2_sb, #Aspk3_sb, #Aspk4_sb, #Aspk5_sb').keyup(function(){
                    var value1 = parseFloat($('#Aspk1_sb').val()) || 0;
                    var value2 = parseFloat($('#Aspk2_sb').val()) || 0;
                    var value3 = parseFloat($('#Aspk3_sb').val()) || 0;
                    var value4 = parseFloat($('#Aspk4_sb').val()) || 0;
                    var value5 = parseFloat($('#Aspk5_sb').val()) || 0;
                $('#jmlAspk_sb').val(value1 + value2 + value3 + value4 + value5 );
                });

                $('#Aspk1_b, #Aspk2_b, #Aspk3_b, #Aspk4_b, #Aspk5_b').keyup(function(){
                    var value1 = parseFloat($('#Aspk1_b').val()) || 0;
                    var value2 = parseFloat($('#Aspk2_b').val()) || 0;
                    var value3 = parseFloat($('#Aspk3_b').val()) || 0;
                    var value4 = parseFloat($('#Aspk4_b').val()) || 0;
                    var value5 = parseFloat($('#Aspk5_b').val()) || 0;
                $('#jmlAspk_b').val(value1 + value2 + value3 + value4 + value5 );
                });

                $('#Aspk1_c, #Aspk2_c, #Aspk3_c, #Aspk4_c, #Aspk5_c').keyup(function(){
                    var value1 = parseFloat($('#Aspk1_c').val()) || 0;
                    var value2 = parseFloat($('#Aspk2_c').val()) || 0;
                    var value3 = parseFloat($('#Aspk3_c').val()) || 0;
                    var value4 = parseFloat($('#Aspk4_c').val()) || 0;
                    var value5 = parseFloat($('#Aspk5_c').val()) || 0;
                $('#jmlAspk_c').val(value1 + value2 + value3 + value4 + value5 );
                });

                $('#Aspk1_k, #Aspk2_k, #Aspk3_k, #Aspk4_k, #Aspk5_k').keyup(function(){
                    var value1 = parseFloat($('#Aspk1_k').val()) || 0;
                    var value2 = parseFloat($('#Aspk2_k').val()) || 0;
                    var value3 = parseFloat($('#Aspk3_k').val()) || 0;
                    var value4 = parseFloat($('#Aspk4_k').val()) || 0;
                    var value5 = parseFloat($('#Aspk5_k').val()) || 0;
                $('#jmlAspk_k').val(value1 + value2 + value3 + value4 + value5 );
                });
         });
    </script>

    <script>
        $(document).ready(function() {

        $('select[name="jur"]').on('change', function(){
            var countryId = $(this).val();
            if(countryId) {
                $.ajax({
                    url: '/states/get/'+countryId,
                    type:"GET",
                    dataType:"json",
                    beforeSend: function(){
                        $('#loader').css("visibility", "visible");
                    },

                    success:function(data) {

                        $('select[name="prodi"]').empty();

                        $.each(data, function(key, value){

                            $('select[name="prodi"]').append('<option value="'+ key +'">' + value + '</option>');

                        });
                    },
                    complete: function(){
                        $('#loader').css("visibility", "hidden");
                    }
                });
            } else {
                $('select[name="prodi"]').empty();
            }

        });

        });
    </script>
  @yield('js')