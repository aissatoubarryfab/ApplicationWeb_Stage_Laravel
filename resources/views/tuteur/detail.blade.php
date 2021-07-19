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

   <br>
     <div class="container">

     <table class="table" border=1 align="center" CELLSPACING="0">

       <thead>

         <tr>

          <th scope="col">Nom</th>

          <th scope="col">Prenom</th>

          <th scope="col">Statut</th>

          <th scope="col">Date de naissance</th>

          <th scope="col">Téléphone</th>

       </tr>

       </thead>

       <tbody>

           

    <tr>

    <td>{{$tuteur->nom}}</td>

    <td>{{$tuteur->prenom}}</td>

    <td>{{$tuteur->statut}}</td>

    <td>{{$tuteur->dateNaiss}}</td>

    <td>{{$tuteur->numTel}}</td>

    </tr>

   

    <tr><tr>

    

    </tr></tr>

  </tbody>

</table>

<div>

<br>

<h3><a href="/listeTuteur" class="badge badge-success">Retour </a></h3>

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