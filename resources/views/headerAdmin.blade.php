
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
        <a class="nav-link  nav-item" href="/liste" >Entreprises</a>  
        <a class="nav-link nav-item" href="/listeEtudiant">Etudiants</a>
        <a class="nav-link nav-item" href="/listeTuteur" >Tuteurs</a>
        <a class="nav-link nav-item" href="/listeJury" >Jurys</a>
        <a class="nav-link nav-item"href="/listeStage">Offres de stages</a>
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