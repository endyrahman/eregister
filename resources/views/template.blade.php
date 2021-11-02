<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>SIAP PAKDE - KABUPATEN TEMANGGUNG</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="SIMPATDA - KABUPATEN TEMANGGUNG" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/logotmg.png') }}">

        <link href="{{ asset('assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

        <!-- Sweet Alert-->
        <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Dropzone -->
        <link href="{{ asset('assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />

         <!-- DataTables -->
        <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('assets/libs/@chenfengyuan/datepicker/datepicker.min.css') }}">
        <link href="{{ asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">

        <!-- Table Responsive -->
        <link href="{{ asset('assets/libs/admin-resources/rwd-table/rwd-table.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">
        <div id="preloader">
            <div id="status">
                <div class="spinner-chase">
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                </div>
            </div>
        </div>

        <div id="layout-wrapper" style="background-image: url('assets/Dashboard1.png');">
            <div class="page-content" style="padding-top: 50px; ">
                <div class="container-fluid">
                    @include('sweetalert::alert')

                    @yield('main')
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

        <!-- apexcharts -->
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

        <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('assets/libs/select2/js/select2.min.js') }}"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

        <!-- Datatable init js -->
        <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>


        <script src="{{ asset('assets/js/app.js') }}"></script>
        <!-- form advanced init -->
        <script src="{{ asset('assets/js/pages/form-advanced.init.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
        <!-- Table Responsive -->
        <script src="{{ asset('assets/js/pages/table-responsive.init.js') }}"></script>
        <script src="{{ asset('assets/libs/@chenfengyuan/datepicker/datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <!-- jquery step -->
        <script src="{{ asset('assets/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>

        <!-- form wizard init -->
        <script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script>

        <!-- Dropzone -->
        <script src="{{ asset('assets/libs/dropzone/min/dropzone.min.js') }}"></script>

        <!-- Sweet Alerts js -->
        <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

        <!-- Sweet alert init js-->
        <script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>

        @yield('script')
        <script type="text/javascript">
            $(document).ready(function(){
                var tdata = $(
                    '#dtpajak-data-reklame, #dtpajak-data-hotel, #dtpajak-data-restoran, #dtpajak-data-hiburan, #dtpajak-data-ppj, #dtpajak-data-minerba, #dtpajak-data-parkir, #dtpajak-data-abt, #dtpajak-data-walet, #dtpelaporan, #dt-penetapan-reklame'
                    ).DataTable( {
                        responsive: true,
                        "columnDefs": [ {
                            "searchable": false,
                            "orderable": false,
                            "targets": 0
                        } ],
                        "order": [[ 1, 'asc' ]]
                    } );

                    tdata.on( 'order.dt search.dt', function () {
                        tdata.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                            cell.innerHTML = i+1;
                        } );
                    } ).draw();

                var list = $('#tablelistwp').DataTable( {
                        responsive: true,
                        "columnDefs": [ {
                            "searchable": false,
                            "orderable": false,
                            "targets": 0
                        } ],
                        "order": [[ 1, 'asc' ]]
                    } );

                    list.on( 'order.dt search.dt', function () {
                        list.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                            cell.innerHTML = i+1;
                        } );
                    } ).draw();

                var ttetap = $('#dtpajak-penetapan-reklame').DataTable( {
                        responsive: true,
                        "columnDefs": [ {
                            "searchable": false,
                            "orderable": false,
                            "targets": 0
                        } ],
                        "order": [[ 1, 'asc' ]]
                    } );

                    ttetap.on( 'order.dt search.dt', function () {
                        ttetap.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                            cell.innerHTML = i+1;
                        } );
                    } ).draw();

                $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
                    $($.fn.dataTable.tables(true)).DataTable()
                       .columns.adjust()
                       .responsive.recalc();
                });

                $('#kode_provinsi_wp').change(function () {
                    var token = $("input[name='_token']").val();
                    var kode_prov = $(this).val();

                    $.ajax({
                        type:'POST',
                        url: '/pendaftaran/getDataKota',
                        data: { _token:token, kode_prov:kode_prov },
                        success:function(data){
                            $('#kode_kota_wp').html(data);
                        }
                    });
                });

                $('#kode_provinsi_objek').change(function () {
                    var token = $("input[name='_token']").val();
                    var kode_prov = $(this).val();

                    $.ajax({
                        type:'POST',
                        url: '/pendaftaran/getDataKota',
                        data: { _token:token, kode_prov:kode_prov },
                        success:function(data){
                            $('#kode_kota_objek').html(data);
                        }
                    });
                });

                $('#kode_kota_wp').change(function () {
                    var token = $("input[name='_token']").val();
                    var kode_kota = $(this).val();
                    var kode_prov = $('#kode_kota_wp option:selected').data('prov');

                    $.ajax({
                        type:'POST',
                        url: '/pendaftaran/getDataKecamatan',
                        data: { _token:token, kode_kota:kode_kota, kode_prov:kode_prov },
                        success:function(data){
                            $('#kode_kecamatan_wp').html(data);
                        }
                    });
                });

                $('#kode_kota_objek').change(function () {
                    var token = $("input[name='_token']").val();
                    var kode_kota = $(this).val();
                    var kode_prov = $('#kode_kota_objek option:selected').data('prov');

                    $.ajax({
                        type:'POST',
                        url: '/pendaftaran/getDataKecamatan',
                        data: { _token:token, kode_kota:kode_kota, kode_prov:kode_prov },
                        success:function(data){
                            $('#kode_kecamatan_objek').html(data);
                        }
                    });
                });

                $('#kode_kecamatan_wp').change(function () {
                    var token = $("input[name='_token']").val();
                    var kode_kec = $(this).val();
                    var kode_prov = $('#kode_kecamatan_wp option:selected').data('prov');
                    var kode_kota = $('#kode_kecamatan_wp option:selected').data('kota');

                    $.ajax({
                        type:'POST',
                        url: '/pendaftaran/getDataKelurahan',
                        data: { _token:token, kode_kec:kode_kec, kode_kota:kode_kota, kode_prov:kode_prov },
                        success:function(data){
                            $('#kode_kelurahan_wp').html(data);
                        }
                    });
                });

                $('#kode_kecamatan_objek').change(function () {
                    var token = $("input[name='_token']").val();
                    var kode_kec = $(this).val();
                    var kode_prov = $('#kode_kecamatan_objek option:selected').data('prov');
                    var kode_kota = $('#kode_kecamatan_objek option:selected').data('kota');

                    $.ajax({
                        type:'POST',
                        url: '/pendaftaran/getDataKelurahan',
                        data: { _token:token, kode_kec:kode_kec, kode_kota:kode_kota, kode_prov:kode_prov },
                        success:function(data){
                            $('#kode_kelurahan_objek').html(data);
                            $('#kode_kelurahan_objek').html(data);
                        }
                    });
                });

                $('#kode_kelurahan_wp').change(function () {
                    var token = $("input[name='_token']").val();
                    var kode_kel = $(this).val();
                    var kode_prov = $('#kode_provinsi_wp option:selected').val();
                    var kode_kota = $('#kode_kota_wp option:selected').val();
                    var kode_kec = $('#kode_kecamatan_wp option:selected').val();

                    $.ajax({
                        type:'POST',
                        url: '/pendaftaran/getDataKodePos',
                        data: { _token:token, kode_kel:kode_kel, kode_kec:kode_kec, kode_kota:kode_kota, kode_prov:kode_prov },
                        success:function(data){
                            $('#kode_pos_wp').val(data.kode_pos);
                        }
                    });
                });

                $('#kode_kelurahan_objek').change(function () {
                    var token = $("input[name='_token']").val();
                    var kode_kel = $(this).val();
                    var kode_prov = $('#kode_provinsi_objek option:selected').val();
                    var kode_kota = $('#kode_kota_objek option:selected').val();
                    var kode_kec = $('#kode_kecamatan_objek option:selected').val();

                    $.ajax({
                        type:'POST',
                        url: '/pendaftaran/getDataKodePos',
                        data: { _token:token, kode_kel:kode_kel, kode_kec:kode_kec, kode_kota:kode_kota, kode_prov:kode_prov },
                        success:function(data){
                            $('#kode_pos_objek').val(data.kode_pos);
                        }
                    });
                });
            });

            function numbersonly(myfield, e, dec)
            {
                var key;
                var keychar;

                if (window.event)
                    key = window.event.keyCode;
                else if (e)
                    key = e.which;
                else
                    return true;
                keychar = String.fromCharCode(key);
                // control keys
                if ((key == null) || (key == 0) || (key == 8) ||
                        (key == 9) || (key == 13) || (key == 27))
                    return true;

                // numbers
                else if ((("0123456789").indexOf(keychar) > -1))
                    return true;

                // decimal point jump
                else if (dec && (keychar == "."))
                {
                    myfield.form.elements[dec].focus();
                    return false;
                } else
                    return false;
            }
        </script>
    </body>

</html>