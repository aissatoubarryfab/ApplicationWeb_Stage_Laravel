@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>liste des entreprises</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
    </head>
    <style>
      a{
        margin-left: 30px;
      }
    </style>
<body>
  @if (Auth::user()->name == 'admin')
    @include('./headerAdmin')
@endif
     <div class="container">
        <ul class="nav">
          <li class="nav-item">
          <a class="nav-link active" href="{{('/tuteur')}}">Ajouter un/une tuteur/tutrice </a>
          </li>
        </ul>
        <form method="GET" action ="/rechEleve.php">
          <input type="search" name="q" placeholder="Recherche..." />
          <input type="submit" value="Valider" />
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
           @foreach ($tuteurs as $key => $tuteur)    
    <tr>
    <td>{{$key+1}}</td>
    <td>{{$tuteur->prenom}}</td>
      <td>
      <a href="{{('/listeTuteur/detailTuteur')}}/{{$tuteur->id}}" class="badge badge-success">Detail</a>

      <a href="{{('/listeTuteur/editTuteur')}}/{{$tuteur->id}}"class="badge badge-warning">Modifier</a>

      <a href="{{('/listeTuteur/destroyTuteur')}}/{{$tuteur->id}}" class="badge badge-danger">Supprimer</a>
      </td>
    </tr>
        @endforeach
  </tbody>
</table>
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