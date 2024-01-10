<nav class="navbar navbar-expand-lg bg-black">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="{{route('home')}}">{{config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{route('home')}}">Home</a>
          </li>

          @guest
              
            <li class="nav-item">
              <a class="nav-link text-white" href="{{route('register')}}">Registrati</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="{{route('login')}}">Login</a>
            </li>

          @endguest

          @auth

            <li class="nav-item">
              <a class="nav-link text-white" href="{{route('articles.create')}}">Crea articolo</a>
            </li>
              
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Auth::user()->name}}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/logout" onclick="event.preventDefault();getElementById('form-logout').submit();">Logout</a></li>
                <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
              </ul>

          @endauth

          
      </div>
    </div>
</nav>