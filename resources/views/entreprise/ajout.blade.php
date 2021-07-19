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
        <legend>Inscription entreprise</legend>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Raison sociale</label>
        <input type="text" class="form-control" placeholder="raison sociale" name="raison_soc">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Numero telephone</label>
        <input type="number" class="form-control"  placeholder="numero telephone" name="numTel">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Numero rue</label>
      <input type="number" class="form-control" id="inputAddress" placeholder="1234" name="numRue">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Nom rue </label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="nom rue" name="nomRue">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Ville</label>
        <input type="text" class="form-control" id="inputCity" name="ville">
      </div>
      <div class="form-group col-md-6">
        <label for="inputState">Code postale</label>
        <input type="number" class="form-control" id="inputCity" name="codePostal">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
    </fieldset>
  </form>
</div>
  @endsection