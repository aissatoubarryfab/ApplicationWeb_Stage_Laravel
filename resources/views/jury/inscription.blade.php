@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="css/style2.css" >
@if (Auth::user()->name == 'admin')
    @include('./headerAdmin')
@endif
<div id="forme">
<form action="" method="POST">
    {{ csrf_field() }}
    <fieldset>
        <legend>Inscription tuteur</legend>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Nom</label>
        <input type="text" class="form-control" placeholder="nom" name="nom">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Prenom</label>
        <input type="text" class="form-control"  placeholder="prenom" name="prenom">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Statut</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="enseignant chercheur ingenieur etc" name="statut">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Date de naissance</label>
      <input type="date" class="form-control" id="inputAddress2" name="dateNaiss">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Numero telephone</label>
        <input type="text" class="form-control" id="inputCity" name="numTel">
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