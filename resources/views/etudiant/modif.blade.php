@extends('layouts.app')
@section('content')
<style>
    #forme{
    width: 80%;
    margin-left: 120px;
    margin-right: 30px;
}
</style>
<link rel="stylesheet" href="css/style2.css" >
@if (Auth::user()->name == 'admin')
    @include('./headerAdmin')
@endif
<div id="forme">
<form action="/listeEtudiant/updateEtudiant/{{$etudiant->id}}" method="POST">
    {{ csrf_field() }}
    <fieldset>
       <marquee> <legend>Modification etudiant</legend></marquee>
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputEmail4">Numero etudiant</label>
            <input type="number" class="form-control" placeholder="34568764" name="numEtudiant" value="{{$etudiant->numEtudiant}}">
        </div>
      <div class="form-group col-md-4">
        <label for="inputEmail4">Nom</label>
        <input type="text" class="form-control" placeholder="nom" name="nom" value="{{$etudiant->nom}}">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Prenom</label>
        <input type="text" class="form-control"  placeholder="prenom" name="prenom" value="{{$etudiant->prenom}}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Numero telephone</label>
      <input type="number" class="form-control" id="inputAddress" name="numTel" value="{{$etudiant->numTel}}">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Adresse</label>
            <input type="text" class="form-control" placeholder="ex : 1 rue jules vallee" name="adresse" value="{{$etudiant->adresse}}">
        </div>
      <div class="form-group col-md-2">
        <label for="inputEmail4">Code postal</label>
        <input type="number" class="form-control" placeholder="75000" name="CP" value="{{$etudiant->CP}}">
      </div>
      <div class="form-group col-md-4">
        <label for="inputPassword4">Ville</label>
        <input type="text" class="form-control"  placeholder="Paris" name="ville" value="{{$etudiant->ville}}">
      </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Niveau</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Licence 3" name="niveau" value="{{$etudiant->niveau}}">
    </div>
    <div class="form-group">
        <label for="inputAddress">Formation</label>
        <input type="text" class="form-control" id="inputAddress" name="formation" placeholder="Eco gestion" value="{{$etudiant->formation}}">
     </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputState">Tuteur</label>
        <input type="number" class="form-control" id="inputCity" name="tuteur_id" value="{{$etudiant->tuteur_id}}">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
    </fieldset>
  </form>
</div>
@if (Auth::user()->name == 'admin')
  @include('./pigi')
@endif 
  @endsection