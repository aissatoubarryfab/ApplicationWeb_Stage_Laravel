@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>Liste des entreprises</title>
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
          <a class="nav-link active" href="{{('/ajoutEntreprise')}}">Ajouter entreprise</a>
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
          <th scope="col">Raison sociale</th>
          <th scope="col" >Actions</th>
       </tr>
       </thead>
       <tbody>
           @foreach ($entreprises as $key => $entreprise)    
    <tr>
    <td>{{$key+1}}</td>
    <td>{{$entreprise->raison_soc}}</td>
      <td>
      <a href="{{('/liste/detail')}}/{{$entreprise->id}}" class="badge badge-success">Detail</a>

      <a href="{{('/liste/edit')}}/{{$entreprise->id}}"class="badge badge-warning">Modifier</a>

      <a href="{{('/liste/destroy')}}/{{$entreprise->id}}" class="badge badge-danger">Supprimer</a>
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