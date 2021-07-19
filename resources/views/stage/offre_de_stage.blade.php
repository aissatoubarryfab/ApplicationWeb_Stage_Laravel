
@extends('layouts.app')
@section('content')

<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
        
       <link rel="stylesheet" href="css/style2.css" >
    </head>

    <body>
      
      @if (Auth::user()->name == 'admin')
          @include('./headerAdmin')
      @endif 
      @if (Auth::user()->name == 'entreprise')
      @include('./header')
  @endif 
     
    <div id="forme">
    <form action ="/stage" method='POST' id="form">
      {{ csrf_field() }}
            <h3 id="h3">Ajout d'offre de stage</h3><br>
            <div class="form-group">
                <label for="inputAddress">Titre</label>
                <input type="text" class="form-control" id="inputAddress" 
                placeholder="Ex: developpeur, chef de projet..." name="titre">
              </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Date debut</label>
                <input type="date" class="form-control" id="inputEmail4" placeholder="Email" name="debut">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Date fin</label>
                <input type="date" class="form-control" id="inputPassword4" placeholder="aaaa/mm/jj" name="fin">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Description de l'offre</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name='description'>
            </div>
            <div class="form-group">
              <label for="inputAddress2">Entreprise</label>
              <input type="number" class="form-control" id="inputPassword4" placeholder="" name="entreprise_id">
              
            </div>
            
            <button type="submit" class="btn btn-primary">Ajouter</button>
          </form>
    </div>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          @if (Auth::user()->name == 'admin')
            @include('./pigi')
          @endif 
    </body>
</html>

@endsection