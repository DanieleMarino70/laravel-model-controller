<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link @if(Request::route()?->getName() == 'home') active @endif) " aria-current="page" href={{  route('home') }}>Home</a>
        <a class="nav-link @if(Request::route()?->getName() == 'movies') active @endif) " href={{  route('movies') }}>Movies</a>
      </div>
    </div>
  </div>
</nav>