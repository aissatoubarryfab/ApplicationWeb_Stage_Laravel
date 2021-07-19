@extends('layouts.app')
@section('content')
<style>
    #forme{
    width: 80%;
    margin-left: 120px;
    margin-right: 30px;
}
</style>
@if (Auth::user()->name == 'admin')
    @include('./headerAdmin')
@endif
<div id="forme">
<form action="/listeTuteur/updateTuteur/{{$tuteur->id}}" method="POST">
    {{ csrf_field() }}
    <fieldset>
        <marquee><legend>Modification tuteur</legend></marquee>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Nom</label>
        <input type="text" class="form-control" placeholder="raison sociale" name="nom" value="{{$tuteur->nom}}">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Prenom</label>
        <input type="text" class="form-control"  placeholder="numero telephone" name="prenom" value="{{$tuteur->prenom}}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Statut</label>
      <input type="text" class="form-control" id="inputAddress" name="statut" placeholder="enseignant chercheur ingenieur etc" value="{{$tuteur->statut}}">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Date de naissance</label>
      <input type="date" class="form-control" id="inputAddress2" placeholder="nom rue" name="dateNaiss" value="{{$tuteur->dateNaiss}}">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Numero telephone</label>
        <input type="number" class="form-control" id="inputCity" name="numTel" value="{{$tuteur->numTel}}">
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