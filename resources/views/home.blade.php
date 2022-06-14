@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h1 style="font-size: 28px;" class=" text-center">Mini - CRM </h1>
                <div class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="navbar navbar-inverse" role="banner">
                                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                        <ul class="nav navbar-nav">
                                            <li><a href="{{ route('home') }}">Administrador</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="sidebar content-box" style="display: block;">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href="{{ route('home') }}"> Home</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('admin/companies') }}"> Compañia</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('admin/employees') }}"> Empleados</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                                </ol>
                            </nav>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="content-box-large">
                                        <div class="panel-body">
                                            <h1>Bienvenido {{ Auth::user()->name }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <footer class="text-muted mt-3 mb-3">
        <div align="center">
            Desarrollado por <a href="https://luistimana.github.io/" target="_blank">Luis Miguel Timaná Gonzaga</a>
        </div>
    </footer>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="../../js/app.js"></script>
@endsection
