@extends('layouts.app')
@section('content')

<html>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<link href="css/style.css" rel="stylesheet" media="all">

<body>
@if (Auth::user()->name == 'etudiant')
<style>
  #navi{
      background-color:rgb(192, 192, 192);
      padding: 2px;
      margin-left:10px;
      margin-right: 10px;
      font-size: 1.2em;
  }
</style>
<div id="navi">
  <nav class="nav nav-pills nav-fill">
      <a class="nav-link  nav-item" href="/home">Accueil</a>  
               <a class="nav-link nav-item" href="contacter">Contact</a>
          <a class="nav-link nav-item" href="/postuler">Offres</a>
      <a class="nav-link nav-item" href="/mesOffres">Consulter mes candidatures</a>
      <form method="GET" action ="/rechercheStage" class="form-inline">
          <div class="input-group">
              <input type="search" name="q" placeholder="Je cherche..."  value="{{request()->q ?? ''}}" >
              <span class="input-group-btn">
              <button type="submit" class="btn btn-secondary"><span class="fa fa-search"></span> Chercher</button>
              </span>
          </div>
      </form>
  </nav>
</div>
@endif
@if (Auth::user()->name == 'admin')
    @include('./headerAdmin')
@endif
     <br><div class="container">

     <table class="table" border=1 align="center" CELLSPACING="0">

       <thead>

         <tr>

          <th scope="col">ID</th>

          <th scope="col">Titre</th>

          <th scope="col">Date debut</th>

          <th scope="col">Date fin </th>

          <th scope="col">Description</th>

          <th scope="col">Entreprise</th>

       </tr>

       </thead>

       <tbody>   

    <tr>
    <td>{{$stage->id}}</td>

    <td>{{$stage->titre}}</td>

    <td>{{$stage->debut}}</td>

    <td>{{$stage->fin}}</td>

    <td>{{$stage->description}}</td>

    <td>{{$stage->entreprise_id}}</td>

    </tr>

   

    <tr><tr>

    

    </tr></tr>

  </tbody>

</table>

<div>

<br>
<h4><a href="/depot/stage/{{$stage->id}}" class="badge badge-success"> Postuler</a>
    <a href="/listeStage" class="badge badge-success">Retour </a></h4>
      </div>
     </div>

     <script src="/js/jquery-3.3.1.slim.min.js" ></script>

      <script src="/js/popper.min.js" ></script>

      <script src="/js/bootstrap.min.js" ></script>

</body>

</html>
@if (Auth::user()->name == 'admin')
@include('./pigi')
@endif
@endsection

