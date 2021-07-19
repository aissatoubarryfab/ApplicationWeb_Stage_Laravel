@extends('layouts.app')
@section('content')


<link rel="stylesheet" href="css/style2.css" >
<div id="forme">
<form action="" method="POST">
    {{ csrf_field() }}
    <fieldset>
        <legend>Inscription etudiant</legend>
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputEmail4">Numero etudiant</label>
            <input type="number" class="form-control" placeholder="34568764" name="numEtudiant">
        </div>
      <div class="form-group col-md-4">
        <label for="inputEmail4">Nom</label>
        <input type="text" class="form-control" placeholder="nom" name="nom">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Prenom</label>
        <input type="text" class="form-control"  placeholder="prenom" name="prenom">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Numero telephone</label>
      <input type="number" class="form-control" id="inputAddress" name="numTel">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">adresse</label>
            <input type="text" class="form-control" placeholder="ex : 1 rue jules vallee" name="adresse">
        </div>
      <div class="form-group col-md-2">
        <label for="inputEmail4">Code postal</label>
        <input type="number" class="form-control" placeholder="75000" name="CP">
      </div>
      <div class="form-group col-md-4">
        <label for="inputPassword4">ville</label>
        <input type="text" class="form-control"  placeholder="Paris" name="ville">
      </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Niveau</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Licence 3" name="niveau">
    </div>
    <div class="form-group">
        <label for="inputAddress">Formation</label>
        <input type="text" class="form-control" id="inputAddress" name="formation" placeholder="Eco gestion">
     </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputState">Tuteur</label>
        <input type="number" class="form-control" id="inputCity" name="tuteur_id">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
    </fieldset>
  </form>
</div>
 @if (Auth::user()->name == 'admin')
    @include('./pigi')
 @endif 
  @endsection