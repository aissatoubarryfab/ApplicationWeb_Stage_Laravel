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
        <a class="nav-link nav-item" href="/mesOffres/">Consulter mes candidatures</a>
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