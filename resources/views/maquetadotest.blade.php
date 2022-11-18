@extends('layouts.app')

@section('content')
<!-- Styles -->
<!-- <div class="container"> -->
<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 bg-category">
            <p>Bootstrap usa una maquetacion por columnas y filas fluidas</p> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 bg-carrussel">
            <p>Bootstrap usa una maquetacion por columnas y filas fluidas</p> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 bg-brans">
            <p>Bootstrap usa una maquetacion por columnas y filas fluidas</p> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 bg-offers ">
            <p>Bootstrap usa una maquetacion por columnas y filas fluidas</p> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12  bg-most-sell">
            <p>Bootstrap usa una maquetacion por columnas y filas fluidas</p> 
            </div>
        </div>
    </div>
    <!--
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6  bg-danger">
            <p>Bootstrap usa una maquetacion por columnas y filas fluidas</p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6  bg-warning">
            <p>Ejemplo para tenerlo en cuenta</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1 col-md-2 col-lg-2">
            <p>Lorem ipsum...</p>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-8">
            <p>Sed ut perspiciatis...</p>
            </div>
            <div class="col-sm-1 col-md-2 col-lg-2">
            <p>Lorem ipsum...</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
-->
</div>
@endsection
