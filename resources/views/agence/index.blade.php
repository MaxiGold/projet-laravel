@extends("layouts.app")
@section("title", "Agence")
@section("content")
<!-- Navigation-->

<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" >
    <div class="container px-4 px-lg-5" >
        <a class="navbar-brand" href="#page-top">Logement Online</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="/Home">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="/Agence" style="color: #ff471a;">Agence</a></li>
                <li class="nav-item"><a class="nav-link" href="/Client">Client</a></li>
                <li class="nav-item"><a class="nav-link" href="/Logement">Logement</a></li>
                <li class="nav-item"><a class="nav-link" href="/Terrain">Terrain</a></li>
                <li class="nav-item"><a class="nav-link" href="/Achat"><img src="assets/img/market.png" style="width: 40px; height: 40px;" /></a></li>
                <li>
                    <!-- Navigation-->
                    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"><img src="assets/img/user.png" style="width: 30px; height: 30px;"/></i></a>
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
                <a href="{{ url('agence/create') }}"><img style="width: 50px; height: 50px;" src="assets/img/add.png"></a>
            </div>
            <div class="container h-100 align-items-center justify-content-center text-center" >
             <h3 class="text-center">Liste des Agences</h3>
             <table id="myTable" class="table table-dark">
                <thead>
                    <tr>

                        <th>ID</th>
                        <th>Nom Agence</th>
                        <th>Nom Cité</th>
                        <th>Province</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                
                @foreach ($agences as $index => $agence)
                <tbody>
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td id="nom_ag">{{ $agence->nom_ag}}</td>
                        <td>{{ $agence->nom_cite }}</td>
                        <td>{{ $agence->province }}</td>
                        <td>


                            <a class="btn" href="{{ url('agence/'. $agence->id) }}"><img style="width: 20px; height: 20px;" src="assets/img/view.png"></a>
                            <a class="btn" href="{{ url('agence/'. $agence->id .'/edit') }}"><img style="width: 20px; height: 20px;" src="assets/img/edit.png"></a>

                            <button class="btn" data-bs-toggle="modal" data-bs-target="#myModal"><img type="submit" style="width: 20px; height: 20px;" src="assets/img/del.png"></button>
                            <!-- The Modal -->
                            <div class="modal" id="myModal">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p style="color: black;">Voulez-vous vraiment supprimer <span id="nom_agence"></span>?</p>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <form action="{{ url('agence/'. $agence->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger" data-bs-dismiss="modal" name="bouton" value="Valider" />
                                            <input type="button" class="btn btn-info" data-bs-dismiss="modal" name="bouton" value="Annuler" />
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </td>

                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
</header>

<script src="{{asset("js/jquery-3.6.3.js")}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.tr').click(function() {
       sc1 = $(this).children('#nom_ag').html();
       console.log(sc1);
       //$('#nom_agence').html(sc1);
    
      });

    });
</script>
@endsection