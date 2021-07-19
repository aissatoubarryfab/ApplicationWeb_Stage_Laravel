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
<form action="/liste/update/{{$entreprise->id}}" method="POST">
    {{ csrf_field() }}
    <fieldset>
        <legend>Modification entreprise</legend>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Raison sociale</label>
        <input type="text" class="form-control" placeholder="raison sociale" name="raison_soc" value="{{$entreprise->raison_soc}}">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Numero téléphone</label>
        <input type="number" class="form-control"  placeholder="numero telephone" name="numTel" value="{{$entreprise->numTel}}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Numero rue</label>
      <input type="number" class="form-control" id="inputAddress" placeholder="1234" name="numRue" value="{{$entreprise->numRue}}">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Nom rue </label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="nom rue" name="nomRue" value="{{$entreprise->nomRue}}">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Ville</label>
        <input type="text" class="form-control" id="inputCity" name="ville" value="{{$entreprise->ville}}">
      </div>
      <div class="form-group col-md-6">
        <label for="inputState">Code postale</label>
        <input type="number" class="form-control" id="inputCity" name="codePostal" value="{{$entreprise->codePostal}}">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
    </fieldset>
  </form>
</div>
@include('pigi')
  @endsection