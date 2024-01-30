<nav class="navbar navbar-expand-lg navbar-dark gradient-custom">

  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
  
      <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">
            <div>
              <i class="bi bi-house-door-fill mb-1"></i>
            </div>
            Home
          </a>
        </li>
        @auth
        @if (Auth::user()&&Auth::user()->is_writer)

        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="{{route('articles.create')}}">
            <div>
              <i class="bi bi-book-half mb-1"></i>
            </div>
            Crea Articolo
          </a>
        </li>
            
        @endif
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" aria-disabled="true" href="{{route('work.with.us')}}">
            <div>
              <i class="bi bi-person-workspace mb-1"></i>
             
            </div>
            Lavora con noi
          </a>
        </li>
        
        <li class="nav-item dropdown text-center mx-2 mx-lg-1">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <div>
              <i class="bi bi-person-circle mb-1"></i>
    
            </div>
            {{Auth::user()->name}}
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu gradient-custom" aria-labelledby="navbarDropdown">
            @if (Auth::user() && Auth::user()->is_admin)

                  <li class="nav-item">
                    <a class="nav-link text-black" href="{{route('admin.dashboard')}}">Dashboard admin</a>
                  </li>
                
            @endif
            @if (Auth::user() && Auth::user()->is_revisor)

              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('revisor.dashboard')}}">Dashboard revisor</a>
              </li>
                
            @endif
            @if (Auth::user() && Auth::user()->is_writer)

                  <li class="nav-item">
                    <a class="nav-link text-black" href="{{route('writer.dashboard')}}">Dashboard writer</a>
                  </li>
                
            @endif
            <li>
              <hr class="dropdown-divider" />
            </li>
          <li><a class="dropdown-item" href="/logout" onclick="event.preventDefault();getElementById('form-logout').submit();">Logout</a></li>
            <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
          </ul>
        </li>
      </ul>
      @endauth

      @guest
      <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0">
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="{{route('register')}}">
            <div>
              <i class="bi bi-r-square-fill mb-1"></i>
  
            </div>
            Registrati
          </a>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="{{route('login')}}">
            <div>
              <i class="bi bi-box-arrow-in-right mb-1"></i>

            </div>
            Login
          </a>
        </li>
      </ul>
      @endguest



      <form class="d-flex input-group w-auto ms-lg-3 my-3 my-lg-0 mr-xl-0" action="{{route('search.article')}}" method="get">
        <input type="text" class="form-control" placeholder="Search" aria-label="Search" name="key" />
        <button class="btn btn-outline-black" type="submit" data-mdb-ripple-color="dark">
          Search
        </button>
      </form>
    </div>

  </div>

</nav>
