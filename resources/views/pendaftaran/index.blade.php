@extends('template')

@section('main')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h1 class="mb-sm-0">Pendaftaran NPWPD Online Kabupaten Temanggung</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div id="basic-example">
                    <!-- Seller Details -->
                        <h3 class="mb-3">Form Wajib Pajak</h3>
                        <form method="POST" action="/pendaftaran/storependaftarannpwpd" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="row">
                            <div class="col-lg-8 mt-3">
                                <label class="form-label">Nama Induk Usaha (Wajib Pajak)</label>
                                <input class="form-control" type="text" name="nama_wp" id="nama_wp" required>
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label class="form-label">Badan Usaha</label>
                                <select class="form-control" name="badan_usaha" id="badan_usaha" required>
                                    <option value="">Pilih</option>
                                    <option value="1">Badan Usaha</option>
                                    <option value="2">Pribadi</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 mt-3">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control" rows="3" id="alamat_wp" name="alamat_wp" required></textarea>
                            </div>
                            <div class="col-md-2 mt-3">
                                <label class="form-label">RT</label>
                                <input class="form-control" type="text" maxlength="3" id="rt_wp" name="rt_wp" required>
                            </div>
                            <div class="col-md-2 mt-3">
                                <label class="form-label">RW</label>
                                <input class="form-control" type="text" maxlength="3" id="rw_wp" name="rw_wp" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Provinsi</label><br/>

                                <select class='form-select select2' id='kode_provinsi_wp' name='kode_provinsi_wp' required>
                                    <option value="">Pilih</option>
                                    @php
                                        foreach ($provinsi as $val) { @endphp
                                            <option value="{{$val->kode_provinsi}}" data-id="{{$val->kode_provinsi}}" {{ $val->kode_provinsi == '33' ? 'selected="selected"' : ''}} >{{$val->nama}}</option>
                                    @php
                                        }
                                    @endphp
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Kabupaten/Kota</label>
                                <select class='form-select select2' id='kode_kota_wp' name='kode_kota_wp' required>
                                    <option value="">Pilih</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Kecamatan</label>
                                <select class='form-select select2' id='kode_kecamatan_wp' name='kode_kecamatan_wp' required>
                                    <option value="">Pilih</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Kelurahan</label>
                                <select class='form-select select2' id='kode_kelurahan_wp' name='kode_kelurahan_wp' required>
                                    <option value="">Pilih</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Kode Pos</label>
                                <input class="form-control" type="text" id="kode_pos_wp" name="kode_pos_wp" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <label class="form-label">No Telp/HP WP</label>
                                <input class="form-control" type="text" id="notel_wp" name="notel_wp" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label class="form-label">E-mail WP</label>
                                <input class="form-control" type="text" id="email_wp" name="email_wp">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Nama Pemilik</label>
                                <input class="form-control" type="text" id="nama_pemilik" name="nama_pemilik" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label class="form-label">NIK <span id="messagenik" style="color:red;"></span></label>
                                <div class="input-group">
                                    <input class="form-control" type="text" id="nik_pemilik" name="nik_pemilik" required>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-md btn-primary" onclick="ceknikcapil()">Cek NIK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Alamat Pemilik</label>
                                <textarea class="form-control" rows="3" id="alamat_pemilik" name="alamat_pemilik"></textarea>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label class="form-label">No Telp/HP Pemilik</label>
                                <input class="form-control" type="text" id="notel_pemilik" name="notel_pemilik" required>
                            </div>
                        </div>

                        <h3 class="mb-3">Form Objek Pajak</h3>
                        <div class="row">
                            <div class="col-lg-8 mt-3">
                                <label class="form-label">Nama Outlet Usaha (Objek Pajak)</label>
                                <input class="form-control" type="text" name="nama_objek" id="nama_objek" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 mt-3">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control" rows="3" id="alamat_objek" name="alamat_objek" required></textarea>
                            </div>
                            <div class="col-md-2 mt-3">
                                <label class="form-label">RT</label>
                                <input class="form-control" type="text" maxlength="3" id="rt_objek" name="rt_objek" required>
                            </div>
                            <div class="col-md-2 mt-3">
                                <label class="form-label">RW</label>
                                <input class="form-control" type="text" maxlength="3" id="rw_objek" name="rw_objek" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Jenis Pajak</label><br/>
                                <select class='form-select' id='jenis_pajak_id' name='jenis_pajak_id' required>
                                    <option value="">Pilih</option>
                                    <option value="1">Pajak Hotel</option>
                                    <option value="2">Pajak Restoran</option>
                                    <option value="3">Pajak Hiburan</option>
                                    <option value="4">Pajak Reklame</option>
                                    <option value="5">Pajak PPJ</option>
                                    <option value="7">Pajak Parkir</option>
                                    <option value="8">Pajak ABT</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Rekening Pajak</label><br/>
                                <select class='form-select' id='rekening_id' name='rekening_id' required>
                                    <option value="">Pilih</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Provinsi</label><br/>
                                <select class='form-select select2' id='kode_provinsi_objek' name='kode_provinsi_objek' required>
                                    <option value="">Pilih</option>
                                    @php
                                        foreach ($provinsi as $val) { @endphp
                                            <option value="{{$val->kode_provinsi}}" data-id="{{$val->kode_provinsi}}" {{ $val->kode_provinsi == '33' ? 'selected="selected"' : ''}}>{{$val->nama}}</option>
                                    @php
                                        }
                                    @endphp
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Kabupaten/Kota</label><br/>
                                <select class='form-select select2' id='kode_kota_objek' name='kode_kota_objek' required>
                                    <option value="">Pilih</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Kecamatan</label>
                                <select class='form-select select2' id='kode_kecamatan_objek' name='kode_kecamatan_objek' required>
                                    <option value="">Pilih</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Kelurahan</label>
                                <select class='form-select select2' id='kode_kelurahan_objek' name='kode_kelurahan_objek' required>
                                    <option value="">Pilih</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Kode Pos</label>
                                <input class="form-control" type="text" id="kode_pos_objek" name="kode_pos_objek" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <label class="form-label">No Telp/HP Objek</label>
                                <input class="form-control" type="text" id="notel_objek" name="notel_objek" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label class="form-label">E-mail Objek</label>
                                <input class="form-control" type="text" id="email_objek" name="email_objek">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Nama Pengelola/Manager</label>
                                <input class="form-control" type="text" id="nama_pengelola" name="nama_pengelola" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label class="form-label">NIK Pengelola/Manager</label>
                                <input class="form-control" type="text" id="nik_pengelola" name="nik_pengelola" required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Alamat Pengelola/Manager</label>
                                <textarea class="form-control" rows="3" id="alamat_pengelola" name="alamat_pengelola"></textarea>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label class="form-label">No Telp/HP Pengelola/Manager</label>
                                <input class="form-control" type="text" id="notel_pengelola" name="notel_pengelola" required>
                            </div>
                        </div>

                        <h3 class="mb-3">Peta Lokasi Objek Pajak</h3>
                        <div class="col-md-12 mb-3">
                            <button type="button" class="btn btn-success" data-id="gps" onclick="getLocation()">Dapatkan Lokasi GPS</button>
                        </div>
                        <div class="col-md-12 mb-3" style="padding-top: 20px;padding-bottom: 10px;">
                            <div id="tempatmap">
                                <input type='text' name='searchMapInput' id='searchMapInput' class='mapControls form-control'>
                            </div>
                            <div id="map" class="row" style="width:100%;height: 600px;"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Latitude Objek Pajak</label>
                                <input class="form-control" type="text" id="latitudeobjek" name="latitudeobjek" readonly>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Longitude Objek Pajak</label>
                                <input class="form-control" type="text" id="longitudeobjek" name="longitudeobjek" readonly>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Foto Lokasi Objek Pajak</label>
                                <input class="form-control" name="fotoobjek" id="fotoobjek" type="file">
                            </div>
                        </div><br/><br/>
                        <button type='submit' class='btn btn-primary btn-lg waves-effect waves-light col-md-12' id='simpanlaporan'>SIMPAN DATA</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var kode_prov = $( "#kode_provinsi_wp option:selected" ).val();

        getLocation();
        getdatakota(kode_prov);
    });

    $('#jenis_pajak_id').change(function () {
        var token = $("input[name='_token']").val();
        var jenispajakid = $(this).val();
        console.log(jenispajakid);

        $.ajax({
            type:'POST',
            url: '/pendaftaran/getcomborekening',
            data: { _token:token, jenis_pajak_id:jenispajakid },
            success:function(data){
                $('#rekening_id').html(data);
            }
        });
    });

    function ceknikcapil() {
        var token = $("input[name='_token']").val();
        var nik = $("#nik_pemilik").val();

        $.ajax({
            type:'POST',
            url: '/pendaftaran/ceknik',
            data: { _token:token, nik:nik },
            success:function(data){
                $('#alamat_pemilik').val(data.alamatpemilik);
                $('#nama_pemilik').val(data.namapemilik);
                $('#messagenik').text(data.message);
            }
        });
    }

    $('#nik_pemilik').keyup(function () {
        $('#messagenik').text("");
    });

    function getdatakota(kode_prov) {
        var token = $("input[name='_token']").val();

        $.ajax({
            type:'POST',
            url: '/pendaftaran/getDataKota',
            data: { _token:token, kode_prov:kode_prov },
            success:function(data){
                $('#kode_kota_wp').html(data);
                $('#kode_kota_objek').html(data);
                var kode_kota = $( "#kode_kota_wp option:selected" ).val();
                setTimeout(getdatakecamatan(kode_prov, kode_kota),100);
            }
        });
    }

    function getdatakecamatan(kode_prov, kode_kota) {
        var token = $("input[name='_token']").val();

        $.ajax({
            type:'POST',
            url: '/pendaftaran/getDataKecamatan',
            data: { _token:token, kode_prov:kode_prov, kode_kota:kode_kota },
            success:function(data){
                $('#kode_kecamatan_wp').html(data);
                $('#kode_kecamatan_objek').html(data);
            }
        });
    }

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            alert('Browser yang anda gunakan tidak support.');
        }
    }

    function showPosition(p) {
        var lat = parseFloat(p.coords.latitude.toFixed(7));
        var lng = parseFloat(p.coords.longitude.toFixed(7));

        $('#latitudeobjek').val(lat);
        $('#longitudeobjek').val(lng);

        document.getElementById("tempatmap").innerHTML = "<input type='text' name='searchMapInput' id='searchMapInput' class='mapControls form-control'>";
        initMap();
        dataAlamat(lat,lng);
    }

    function showError(e) {
        switch(e.code) {
            case e.PERMISSION_DENIED:
                alert('Ijinkan untuk akses Geolocation (GPS) untuk mendapatkan data lokasi anda.')
              break;
        }
    }

    function initMap() {
        var lat = parseFloat($('#latitudeobjek').val());
        var lng = parseFloat($('#longitudeobjek').val());

        if (isNaN(lat) || isNaN(lng)) {
            lat = parseFloat(-7.3337685);
            lng = parseFloat(110.1801539);
        }

        var myLatLng = {lat: lat, lng: lng};

        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: lat, lng: lng},
          zoom: 17
        });

        var input = document.getElementById('searchMapInput');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
            map: map,
            position: myLatLng,
            draggable: true
        });

        autocomplete.addListener('place_changed', function() {
            infowindow.close();
            marker.setVisible(false);
            var place = autocomplete.getPlace();

            /* If the place has a geometry, then present it on a map. */
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }

            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

            /* Location details */
            $('#latitudeobjek').val(place.geometry.location.lat().toFixed(7));
            $('#longitudeobjek').val(place.geometry.location.lng().toFixed(7));
            dataAlamat(place.geometry.location.lat(),place.geometry.location.lng());
        });

        google.maps.event.addListener(marker, 'dragend', function(marker) {
            var latLng = marker.latLng;
            $('#latitudeobjek').val(latLng.lat().toFixed(7));
            $('#longitudeobjek').val(latLng.lng().toFixed(7));
            dataAlamat(latLng.lat(),latLng.lng());
        });
    }

    function dataAlamat(lat,lng) {
        var latlng = {lat: lat, lng: lng};
        var geocoder = new google.maps.Geocoder;
        geocoder.geocode({'location': latlng}, function(results, status) {
            if (status === 'OK') {
                if (results[0]) {
                    rs = results[0].formatted_address;
                    rs = rs.replace('Kec.', '');
                    var arrval = rs.split(",");
                    arrval[2] = arrval[2].replace('.', '');
                    $('#searchMapInput').val(results[0].formatted_address);
                } else {
                    rs = 'No results found';
                    alert(rs);
                }
            } else {
                rs = 'Geocoder failed due to: ' + status;
                alert(rs);
            }
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIcfDt4yUMeAiGKDTNyIufrBMuif-efms&libraries=places&callback=initMap" async defer></script>
<!-- end row -->
@endsection