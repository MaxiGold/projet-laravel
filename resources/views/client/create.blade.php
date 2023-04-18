@extends('layouts.app')
@section("title", "Client")
@section('content')

<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" >
    <div class="container px-4 px-lg-5" >
        <a class="navbar-brand" href="#page-top">Logement Online</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="/Home">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="/Agence" >Agence</a></li>
                <li class="nav-item"><a class="nav-link" href="/Client" style="color: #ff471a;">Client</a></li>
                <li class="nav-item"><a class="nav-link" href="/Logement">Logement</a></li>
                <li class="nav-item"><a class="nav-link" href="/Terrain">Terrain</a></li>
                <li class="nav-item"><a class="nav-link" href="/Achat"><img src="{{asset("assets/img/market.png")}}" style="width: 40px; height: 40px;" /></a></li>
                <li>
                    <!-- Navigation-->
                    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"><img src="{{asset("assets/img/user.png")}}" style="width: 30px; height: 30px;"/></i></a>
                    <nav id="sidebar-wrapper" >
                        <ul class="sidebar-nav">
                            <li class="sidebar-brand"><a href="#page-top">Utilisateur</a></li>
                            <li class="sidebar-nav-item"><a href="/Profil">Profil</a></li>
                            <li class="sidebar-nav-item"><a href="/">Deconnexion</a></li>
                        </ul>
                    </nav>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container-fluid px-4 px-lg-5" style="height: 650px;">
            <div class="container d-flex justify-content-around align-items-center" style="height: 70px; width: 300px;">
                <h2 style="color: white;">Formulaire Ajout</h2>
            </div>
            <div class="container align-items-center justify-content-center text-center" style=" width: 400px; height: 400px;">
                @if ($errors->any())

                <div class="alert alert-danger">

                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach

                    </ul>

                </div>

                @endif

                <form action="{{ url('client/') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="nom_client">Nom Client:</label>
                        <input type="text" class="form-control" id="nom_client" name="nom_client" value="">
                    </div>

                    <div class="form-group mb-3">

                        <label for="adresse_client">Adresse Client:</label>
                        <input type="text" class="form-control" id="adresse_client" name="adresse_client" value="">

                    </div>

                    <div class="form-group mb-3">
                        <label for="lieu_travail">Lieu de travail:</label>
                        <input type="text" class="form-control" id="lieu_travail" name="lieu_travail" value="">
                    </div>

                    <button type="submit" class="btn btn-primary">Valider</button>

                </form>
            </div>
        </div>
    </header>



    @endsection