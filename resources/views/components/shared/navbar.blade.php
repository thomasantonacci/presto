<nav class="navbar sticky-top navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">Presto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav ms-auto pe-5">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('home')}}">Home
            <span class="visually-hidden">(current)</span>
          </a>

          @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profilo</a>
          <div class="dropdown-menu">
            <a class="dropdown-item text-light" href="#">Profilo utente</a>
            <!-- <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a> -->
            <div class="dropdown-divider"></div>
            <form class="nav-link d-flex justify-content-center align-items-center" action="{{route('logout')}}" method="POST">
              @csrf
              <button type="submit" class="btn p-0 m-0 text-danger">Logout</button>
            </form>
            @endauth
          </div>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">Tutti gli annunci</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Categorie</a>
          <ul class="dropdown-menu">
            @foreach ($categories as $category)
            <li><a class="dropdown-item text-light"
                href="">{{ $category->name }}</a>

              @if (!$loop->last)
              <hr class="dropdown-divider">
              @endif
              @endforeach
          </ul>
        </li>

        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('create.article')}}">Crea annuncio +</a>
        </li>
        @endauth

        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        @endguest


      </ul>

    </div>
  </div>
</nav>