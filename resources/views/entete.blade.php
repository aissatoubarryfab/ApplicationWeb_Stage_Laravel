<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="css/style.css" rel="stylesheet" media="all">
<link href="css/style2.css" rel="stylesheet" media="all">
<nav class="navbar navbar-light bg-light">
      @guest()
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Profiles
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
        <a class="dropdown-item" href="{{route('connexion')}}">Entreprises</a>
        <a class="dropdown-item" href="{{route('connexion')}}">Etudiants</a>
        <a class="dropdown-item" href="{{route('connexion')}}">Tuteurs</a>
        <a class="dropdown-item" href="{{route('connexion')}}">Jurys</a>
      </div>
      <a class="navbar-link disabled" href="#" id="post">Acceuil</a>
      <a class="navbar-link disabled" href="#" id="post">Contact</a>
      <a class="navbar-link disabled" href="/admin.login">Admin</a>
     @else
     @auth
     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      {{auth()->user()->email}}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
      <a class="navbar-link disabled" href="/deconnexion">Se deconnecter</a>
    </div>
     @endauth
     <a class="navbar-link disabled" href="#" id="post">Acceuil</a>
     <a class="navbar-link disabled" href="#" id="post">Contact</a>
     @endguest

  </nav>
