@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
    <head>
        <title>Liste des etudiants</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
    </head>
    <style>
      a{
        margin-left: 30px;
      }
    </style>
 <body>
  @if (Auth::user()->name == 'etudiant')
    @include('./headerEtudiant')
@endif
@if (Auth::user()->name == 'admin')
@include('./headerAdmin')
@endif
     <div class="container">
        <ul class="nav">
          <li class="nav-item">
          <a class="nav-link active" href="{{('/etudiant')}}">Ajout un etudiant </a>
          </li>
        </ul>
        <form method="GET" action ="/rechEleve.php">
          <input type="search" name="q" placeholder="Recherche..." />
          <input type="submit" value="Valider"/>
        </form><br>
     <table class="table">
       <thead>
         <tr>
          <th scope="col">#</th>
          <th scope="col">Titres</th>
          <th scope="col" >Actions</th>
       </tr>
       </thead>
       <tbody>
         @foreach ($etudiants as $key => $etudiant)    
    <tr>
    <td>{{$key+1}}</td>
    <td>{{$etudiant->prenom}}</td>
      <td>
      <a href="{{('/listeEtudiant/detailEtudiant')}}/{{$etudiant->id}}" class="badge badge-success">Detail</a>

      <a href="{{('/listeEtudiant/editEtudiant')}}/{{$etudiant->id}}"class="badge badge-warning">Modifier</a>

      <a href="{{('/listeEtudiant/destroyEtudiant')}}/{{$etudiant->id}}" class="badge badge-danger"
        data-confirm='est vous sur ?'>Supprimer</a>
      </td>
    </tr>
        @endforeach
  </tbody>
</table>
     </div>
     <script src="/js/jquery-3.3.1.slim.min.js" ></script>
      <script src="/js/popper.min.js" ></script>
      <script src="/js/bootstrap.min.js" ></script>
      @if (Auth::user()->name == 'admin')
         @include('./pigi')
      @endif 
</body>
</html>
@endsection