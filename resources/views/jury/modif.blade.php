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
<form action="/listeJury/updateJury/{{$jury->id}}" method="POST">
    {{ csrf_field() }}
    <marquee> <legend>Modification jury</legend></marquee>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Nom</label>
        <input type="text" class="form-control" placeholder="nom" name="nom" value="{{$jury->nom}}">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Prenom</label>
        <input type="text" class="form-control"  placeholder="prenom" name="prenom" value="{{$jury->prenom}}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Statut</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="enseignant chercheur ingenieur etc"
       name="statut" value="{{$jury->statut}}">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Date de naissance</label>
      <input type="date" class="form-control" id="inputAddress2" name="dateNaiss" value="{{$jury->dateNaiss}}">
    </div>
    <div class="form-row">
        <label for="inputCity">Numero telephone</label>
        <input type="text" class="form-control" id="inputCity" name="numTel" value="{{$jury->numTel}}">
      </div><br>

    <button type="submit" class="btn btn-primary">Modifier</button>
  </form>
</div>
@if (Auth::user()->name == 'admin')
  @include('./pigi')
@endif 
  @endsection