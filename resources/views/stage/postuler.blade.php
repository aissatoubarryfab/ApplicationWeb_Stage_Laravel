@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>liste des stages</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
    </head>
    <style>
      #navi{
          background-color:rgb(192, 192, 192);
          padding: 2px;
          margin-left:10px;
          margin-right: 10px;
          font-size: 1.2em;
      }
  </style>
<body>
  <div id="navi">
    <nav class="nav nav-pills nav-fill">
        <a class="nav-link  nav-item" href="/home">Accueil</a>  
                 <a class="nav-link nav-item" href="contacter">Contact</a>
            <a class="nav-link nav-item" href="/postuler">Offres</a>
        <a class="nav-link nav-item" href="/mesOffres/{{$id}}">Consulter mes candidatures</a>
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
     <div class="container">
       
     <table class="table">
       <thead>
         <tr>
          <th scope="col">#</th>
          <th scope="col">Titres</th>
          <th scope="col" >Actions</th>
       </tr>
       </thead>
       <tbody>
           @foreach ($stages as $key => $stage)    
    <tr>
    <td>{{$key+1}}</td>
    <td>{{$stage->titre}}</td>
      <td>
     <a href="{{('/listeStage/detailStage')}}/{{$stage->id}}" class="badge badge-success"> Detail de l'offre </a>
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