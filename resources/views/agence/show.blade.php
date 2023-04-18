@extends('layouts/app')
@section("title", "Agence")

@section('content')
<!-- Navigation-->

<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" >
    <div class="container px-4 px-lg-5" >
        <a class="navbar-brand" href="#page-top">Logement Online</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="/index">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="/Agence" style="color: #ff471a;">Agence</a></li>
                <li class="nav-item"><a class="nav-link" href="/Client">Client</a></li>
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
            <div class="container d-flex justify-content-around align-items-center" style=" height: 70px; width: 300px;">
                <h2 style="color: white;">Description</h2>
            </div>
            <div class="container h-100 align-items-center justify-content-center text-center" >
               <table class="table table-dark" style="height: 350px;">

                <tr>
                    <th>Nom Agence:</th>
                    <td>{{ $agence->nom_ag }}</td>
                </tr>

                <tr>

                    <th>Nom Cité:</th>
                    <td>{{ $agence->nom_cite }}</td>

                </tr>

                <tr>

                    <th>Province:</th>
                    <td>{{ $agence->province }}</td>

                </tr>
            </table>
        </div>
    </div>
</header>



@endsection