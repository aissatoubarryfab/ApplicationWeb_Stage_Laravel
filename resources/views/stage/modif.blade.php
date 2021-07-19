
@extends('layouts.app')
@section('content')

<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
        
       <link rel="stylesheet" href="css/style2.css" >
    </head>
    <style>
        #forme{
        width: 80%;
        margin-left: 120px;
        margin-right: 30px;
    }
    </style>
    <body>
      @if (Auth::user()->name == 'admin')
      @include('./headerAdmin')
   @endif 
    <div id="forme">
    <form action ="/listeStage/updateStage/{{$stage->id}}" method='POST' id="form">
      {{ csrf_field() }}
            <h3>Modification d'offre de stage</h3>
            <div class="form-group">
                <label for="inputAddress">Titre</label>
                <input type="text" class="form-control" id="inputAddress" 
                placeholder="Ex: developpeur, chef de projet..." name="titre" value="{{$stage->titre}}">
              </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Date debut</label>
                <input type="date" class="form-control" id="inputEmail4" placeholder="Email" name="debut" value="{{$stage->debut}}">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Date fin</label>
                <input type="date" class="form-control" id="inputPassword4" placeholder="aaaa/mm/jj" name="fin" value="{{$stage->fin}}">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Description de l'offre</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name='description' value="{{$stage->description}}">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Entreprise</label>
              <input type="number" class="form-control" id="inputPassword4" placeholder="" name="entreprise_id" value="{{$stage->entreprise_id}}">
              
            </div>
            
            <button type="submit" class="btn btn-primary">Modifier</button>
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