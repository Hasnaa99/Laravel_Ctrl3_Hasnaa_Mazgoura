<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand mx-2" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
     
      <div class="dropdown mx-3">
        <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Espace etablissement
        </a>
      
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="{{route('stagiaires.index')}}">Stagiaires</a></li>

        </ul>
      </div>
      <div class="dropdown mx-3">
        <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Espace bibliothéque
        </a>
      
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="{{route('auteurs.index')}}">Auteurs</a></li>
        </ul>
      </div>
      <div class="dropdown mx-3">
        <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Espace voitures
        </a>
      
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="{{route('voitures.index')}}">Voitures</a></li>
        </ul>
      </div>
      <div class="dropdown mx-3">
        <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          {{ Auth::user()->name }}
        </a>
      
        <ul class="dropdown-menu ml-auto" aria-labelledby="dropdownMenuLink">
          <li>  <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="dropdown-item" type="submit">{{ __('Log Out') }}</button>
        </form></li>
        </ul>
      </div>

    </div>
    </div>

  
</nav> 