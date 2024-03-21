@extends('adminlte::page')

@section('title', 'Tambah Data Rumah Sakit')

@section('content_header')
<h1>Tambah Data Rumah Sakit</h1>
@stop

@section('content')
<div class="container-fluid px-3">
    <div class="row pt-3">
        <a href="{{ route('hospitals.index') }}" class="btn btn-info text-right">
            <i class="fas fa-arrow-left pr-2"></i>
            Back
        </a>
    </div>
</div>
<div class="container-fluid px-3">
    <div class="row flex-column">
        <form action="{{ route('hospitals.store') }}" method="post" class="pt-5">
            @csrf

            {{-- Row 1 --}}
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="nirs" class="form-label">No Induk</label>
                        <input type="text" name="nirs" id="nirs" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="nib" class="form-label">Nomor Izin Berusaha (NIB)</label>
                        <input type="text" name="nib" id="nib" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="nio" class="form-label">Nomor Izin Operasional</label>
                        <input type="text" name="nio" id="nio" class="form-control">
                    </div>
                </div>
            </div>

            {{-- Row 2 --}}
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>
            </div>

            {{-- Row 3 --}}
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis</label>
                        <select name="jenis" id="jenis" class="form-control">
                            <option value="">Pilih salah satu...</option>
                            @foreach ($jenis as $j)
                            <option value="{{ $j }}">{{ $j }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select name="kelas" id="kelas" class="form-control">
                            <option value="">Pilih salah satu...</option>
                            @foreach ($kelas as $k)
                                <option value="{{ $k }}">{{ $k }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="kapasitas" class="form-label">Kapasitas</label>
                        <input type="text" name="kapasitas" id="kapasitas" class="form-control">
                    </div>
                </div>
            </div>

            {{-- Row 4 --}}
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="unit_instalasi" class="form-label">Unit Instalasi</label>
                        <input type="text" name="unit_instalasi" id="unit_instalasi" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No. Telepon</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                </div>
            </div>

            {{-- Row 5 --}}
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="alamat_lengkap" class="form-label">Alamat Lengkap</label>
                        <input type="text" name="alamat_lengkap" id="alamat_lengkap" class="form-control">
                    </div>
                </div>
            </div>

            {{-- Row 6 --}}
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <select name="provinsi" id="provinsi" class="form-control">
                            <option value="">Pilih salah satu...</option>
                            @foreach ($provinsi as $prov)
                                <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="kabupaten" class="form-label">Kabupaten</label>
                        <select name="kabupaten" id="kabupaten" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <select name="kecamatan" id="kecamatan" class="form-control">

                        </select>
                    </div>
                </div>
            </div>

            {{-- Row 7 --}}
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="kode_pos" class="form-label">Kode Pos</label>
                        <input type="text" name="kode_pos" id="kode_pos" class="form-control">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary text-center">Submit</button>
        </form>
    </div>
</div>
@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{--
<link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script>
        function getKabupaten(provinsiId) {
            $(document).ready(function(){
                $('#provinsi').on('change', function () {
                    var provinsiId = this.value;
                    $('#kabupaten').empty();
                    $.ajax({
                        url: 'hospitals/get-kabupaten/' + provinsiId,
                        method: 'GET',
                        success: function(data) {
                            $('#kabupaten').empty();
                            $('#kabupaten').append('<option value="">Pilih Kabupaten</option>');
                            $.each(data, function(i, kabupaten) {
                            $('#kabupaten').append('<option value="' + kabupaten.id + '">' + kabupaten.name + '</option>');
                        });
                        }
                    });
                    })
                })
        }

        function getKecamatan(regencyId) {
            var url = 'https://rzki.github.io/api-wilayah-indonesia/api/districts/'+regencyId+'.json';

            $.ajax({
                url: url,
                method: 'GET',
                success: function(data) {
                    $('#kecamatan').empty();
                    $('#kecamatan').append('<option value="">Pilih Kecamatan</option>');
                $.each(data, function(i, kecamatan) {
                    $('#kecamatan').append('<option value="' + kecamatan.id + '">' + kecamatan.name + '</option>');
                });
                }
            });
        }
    </script> --}}
    {{-- <script>
        function getKabupaten(provinceId) {
        var url = '{{ route('hospital.kabupaten', ':provinceId') }}';

        $.ajax({
        url: url,
        method: 'GET',
        success: function(data) {
        $('#kabupaten').empty();
        $('#kabupaten').append('<option value="">Pilih Kabupaten</option>');
        $.each(data, function(i, kabupaten) {
        $('#kabupaten').append('<option value="' + kabupaten.id + '">' + kabupaten.name + '</option>');
        });
        }
        });
        }

        function getKecamatan(regencyId) {
        var url = '{{ route('hospital.kecamatan', ':regencyId') }}';

        $.ajax({
        url: url,
        method: 'GET',
        success: function(data) {
        $('#kecamatan').empty();
        $('#kecamatan').append('<option value="">Pilih Kecamatan</option>');
        $.each(data, function(i, kecamatan) {
        $('#kecamatan').append('<option value="' + kecamatan.id + '">' + kecamatan.name + '</option>');
        });
        }
        });
        }

        // Call getKabupaten on province change
        $('#provinsi_id').change(function() {
        var provinceId = $(this).val();
        getKabupaten(provinceId);
        // Clear kecamatan options when province changes
        $('#kecamatan').empty();
        });

        // Call getKecamatan on kabupaten change
        $('#kabupaten').change(function() {
        var regencyId = $(this).val();
        getKecamatan(regencyId);
        });
    </script> --}}
    {{-- <script>
        $(document).ready(function() {
        $('#provinsi').on('change', function() {
            var provinceId = $(this).val();

            if (provinceId) {
                $.ajax({
                    url: "{{ route('hospital.kabupaten') }}", // Replace with actual route name
                    type: 'GET',
                    data: { provinsi_id: provinceId },
                    dataType: 'json',
                    success: function(response) {
                        $('#kabupaten').empty().prop('disabled', false);
                        $('#kabupaten').append('<option value="">-- Pilih Kabupaten --</option>');
                        $.each(response, function(i, kabupaten) {
                            $('#kabupaten').append($('<option>', {
                                value: kabupaten.id,
                                text: kabupaten.name
                            }));
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Error fetching Kabupaten:", textStatus, errorThrown);
                    }
                });
            } else {
                $('#kabupaten').empty().prop('disabled', true).append('<option value="">-- Pilih Kabupaten --</option>');
                $('#kecamatan').empty().prop('disabled', true).append('<option value="">-- Pilih Kecamatan --</option>');
            }
        });

        $('#kabupaten').on('change', function() {
            var regencyId = $(this).val();

            if (regencyId) {
                $.ajax({
                    url: "{{ route('hospital.kecamatan') }}", // Replace with actual route name
                    type: 'GET',
                    data: { kabupaten_id: regencyId },
                    dataType: 'json',
                    success: function(response) {
                        $('#kecamatan').empty().prop('disabled', false);
                        $('#kecamatan').append('<option value="">-- Pilih Kecamatan --</option>');
                        $.each(response, function(i, kecamatan) {
                            $('#kecamatan').append($('<option>', {
                                value: kecamatan.id,
                                text: kecamatan.name
                            }));
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Error fetching Kecamatan:", textStatus, errorThrown);
                    }
                });
            } else {
                $('#kecamatan').empty().prop('disabled', true).append('<option value="">-- Pilih Kecamatan --</option>');
            }
        });
        });
    </script> --}}
<script>
    $(document).ready(function () {
        $('#provinsi').on('change', function () {
            var provinsiId = this.value;
            $('#kabupaten').html('');
            $.ajax({
                url: '{{ route('hospital.kabupaten') }}?provinsi_id='+provinsiId,
                type: 'get',
                success: function (res) {
                    $('#kabupaten').html('<option value="">Pilih Kabupaten</option>');
                    $.each(res, function (key, value) {
                        $('#kabupaten').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                }
            });
        });

        $('#kabupaten').on('change', function () {
            var kabupatenId = this.value;
            $('#kecamatan').html('');
                $.ajax({
                url: '{{ route('hospital.kecamatan') }}?kabupaten_id='+kabupatenId,
                type: 'get',
                success: function (res) {
                    $('#kecamatan').html('<option value="">Pilih Kecamatan</option>');
                    $.each(res, function (key, value) {
                        $('#kecamatan').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                }
            });
        });
    });
</script>
@stop
