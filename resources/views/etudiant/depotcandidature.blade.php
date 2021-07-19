@extends('layouts.app')
@section('content')
<style>
    #navi{
        background-color:rgb(192, 192, 192);
        padding: 2px;
        margin-left:10px;
        margin-right: 10px;
        font-size: 1.2em;
    }
</style>
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
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3 align="center"><b></b></h3>
                <br>

                <link rel="stylesheet" href="css/style2.css" >
<div id="forme">
<form action="/depot/postuler" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <fieldset>
        <legend>Veuillez ajouter les pièces jointes correspondantes</legend>
    <div class="form-row">
            <div class="form-group col-md-6">
              <label>ID etudiant</label>
              <input hidden = {{true}}  type="text" class="form-control" placeholder="id_etudiant" name='etudiant_id' value = {{$id}}>
            </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
          <label>ID Stage</label>
          <input hidden = {{true}} type="text" class="form-control" placeholder="id_etudiant" name='stage_id' value = {{$stage->id}}>
        </div>
</div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Curriculum vitae</label>
        <input type="file" class="form-control" placeholder="Cv ......." name='cv'>
      </div>
    </div>
      <div class="form-row">
        <div class="form-group col-md-6">
        <label>Lettre de motivation</label>
        <input type="file" class="form-control"  placeholder="Lettre de motivation" name='motivation' >
      </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
               Soumettre
            </button>
        </div>
    </div>
                        
                <div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
