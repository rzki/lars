@extends('adminlte::page')

@section('title', 'Rumah Sakit')

@section('content_header')
<h1 class="font-weight-bolder">Rumah Sakit</h1>
@stop

@section('content')
<div class="pt-3">
    <div class="d-flex justify-content-end">
        <a href="{{ route('hospitals.create') }}" class="btn btn-success"><i class="fas fa-fw fa-plus"></i> Tambah Data</a>
    </div>
    <table class="table" id="hospitalsTable">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Status</th>
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
@stop

@section('css')

@stop

@section('js')
<script>
    $(document).ready( function () {
    $('#hospitalsTable').DataTable({
        searching: false,
        info: false,
        lengthChange: false
    });
    } );
</script>
@stop
