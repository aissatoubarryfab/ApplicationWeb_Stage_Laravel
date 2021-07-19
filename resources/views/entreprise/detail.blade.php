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

          <th scope="col">Raison sociale</th>

          <th scope="col">Numéro téléphone</th>

          <th scope="col">Numéro rue</th>

          <th scope="col">Nom rue</th>

          <th scope="col">Ville</th>

          <th scope="col">Code postal</th>

       </tr>

       </thead>

       <tbody>   

    <tr>

    <td>{{$entreprise->raison_soc}}</td>

    <td>{{$entreprise->numTel}}</td>

    <td>{{$entreprise->numRue}}</td>

    <td>{{$entreprise->nomRue}}</td>

    <td>{{$entreprise->ville}}</td>

    <td>{{$entreprise->codePostal}}</td>

    </tr>

    <tr><tr>

    

    </tr></tr>

  </tbody>

</table>

<div>

<br>

<h3><a href="/liste" class="badge badge-success">Retour </a></h3>

    </div>

     <script src="/js/jquery-3.3.1.slim.min.js" ></script>

      <script src="/js/popper.min.js" ></script>

      <script src="/js/bootstrap.min.js" ></script>

</body>

</html>
@include('pigi')
@endsection