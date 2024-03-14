@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="row pl-2 mt-3">
    <h4 class="font-weight-bolder">Statistik</h4>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card bg-primary">
            <div class="card-body">
                <div class="row justify-content-center">
                    <h5 class="font-weight-bolder text-uppercase">Rumah Sakit</h5>
                </div>
                <div class="total-rs row pt-3">
                    <div class="col-lg-6 text-center">
                        <h5 class="font-weight-bold">Total</h5>
                    </div>
                    <div class="col-lg-6 text-center">
                        <h5 class="font-weight-bold">200</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card bg-success">
            <div class="card-body">
                <div class="row justify-content-center">
                    <h5 class="font-weight-bolder text-uppercase">Akreditasi</h5>
                </div>
                <div class="total-rs row pt-3">
                    <div class="col-lg-6 text-center">
                        <h5 class="font-weight-bold">Total</h5>
                    </div>
                    <div class="col-lg-6 text-center">
                        <h5 class="font-weight-bold">50</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pt-3">
    <h5 class="font-weight-bold">Daftar Rumah Sakit</h5>
</div>
@stop

@section('css')
@stop

@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop
