@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>liste des stages</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
    </head>
    <style>
      a{
        margin-left: 30px;
      }
    </style>
<body>
     <div class="container">
        <ul class="nav">
          <li class="nav-item">
          <a class="nav-link active" href="{{('/stage')}}">Ajouter une offre </a>
          </li>
        </ul>
        <form method="GET" action ="/rechercheStage">
            <input type="search" name="q" placeholder="titre..." value="{{request()->q ?? '' }}" >
            <input type="submit" value="Rechercher" />
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
           @foreach ($stages as $key =>$stage)    
    <tr>
    <td>{{$key+1}}</td>
    <td>{{$stage->titre}}</td>
      <td>
      <a href="{{('/listeStage/detailStage')}}/{{$stage->id}}" class="badge badge-success">Detail</a>

      <a href="{{('/listeStage/editStage')}}/{{$stage->id}}"class="badge badge-warning">Modifier</a>

      <a href="{{('/listeStage/destroyStage')}}/{{$stage->id}}" class="badge badge-danger">Supprimer</a>
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