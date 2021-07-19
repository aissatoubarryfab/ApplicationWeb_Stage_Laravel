@extends('layouts.app')
@section('content')

<!DOCTYPE html>

<html>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<link href="css/style.css" rel="stylesheet" media="all">

<body>
  @if (Auth::user()->name == 'admin')
    @include('./headerAdmin')
@endif
     <br><div class="container">

     <table class="table" border=1 align="center" CELLSPACING="0">

       <thead>

         <tr>
         <th scope="col">Numero Etudiant</th>

          <th scope="col">Nom</th>

          <th scope="col">Prenom</th>

          <th scope="col">Téléphone</th>

          <th scope="col">Adresse</th>

          <th scope="col">Code postal</th>

          <th scope="col">Ville</th>

          <th scope="col">Niveau</th>

          <th scope="col">Formation</th>

          <th scope="col">Tuteur</th>

       </tr>

       </thead>

       <tbody>   

    <tr>
    <td>{{$etudiant->numEtudiant}}</td>

    <td>{{$etudiant->nom}}</td>

    <td>{{$etudiant->prenom}}</td>

    <td>{{$etudiant->numTel}}</td>

    <td>{{$etudiant->adresse}}</td>

    <td>{{$etudiant->CP}}</td>

    <td>{{$etudiant->ville}}</td>

    <td>{{$etudiant->niveau}}</td>

    <td>{{$etudiant->formation}}</td>

    <td>{{$etudiant->tuteur_id}}</td>

    </tr>

  </tbody>

</table>

<div>

<br>

<h3><a href="/listeEtudiant" class="badge badge-success">Retour </a></h3>

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