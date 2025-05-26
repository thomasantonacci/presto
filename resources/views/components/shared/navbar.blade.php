<nav class="navbar sticky-top navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand myfont" href="{{route('home')}}">Presto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('home')}}"><i class="fa-solid p-1  fa-house"></i>Home
            <span class="visually-hidden">(current)</span>
          </a>


        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}"><i class="fa-solid p-1 fa-newspaper"></i>Tutti gli annunci</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
           <i class="fa-solid p-1 fa-list-ul"></i> Categorie</a>
          <ul class="dropdown-menu">
            @foreach ($categories as $category)
            <li><a class="dropdown-item text-light"
                href="{{route('byCategory',['category' => $category])}}">{{ $category->name }}</a>

              @if (!$loop->last)
              <hr class="dropdown-divider">
              @endif
              @endforeach
          </ul>
        </li>

        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('create.article')}}"><i class="fa-solid p-1 fa-file-circle-plus"></i>Crea annuncio </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa-solid p-1 fa-user"></i>Profilo</a>
          <div class="dropdown-menu">
            <a class="dropdown-item text-light" href="#">Profilo utente</a>
            @if (Auth::user()->is_revisor)
            <a class="position-relative btn-sm dropdown-item text-light" href="{{route('revisor.index')}}">Zona Revisore<span class="position-absolute top-0 ms-2 mt-1 traslate-middle badge rounded-pill bg-danger">{{\App\Models\Article::toBeRevisedCount()}}</span></a>
            @endif
            <!-- <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a> -->
            <div class="dropdown-divider"></div>
            <form class="nav-link d-flex justify-content-center align-items-center" action="{{route('logout')}}" method="POST">
              @csrf
              <button type="submit" class="btn p-0 m-0 text-danger"> <i class="fa-solid p-1 text-danger fa-right-from-bracket"></i>Logout</button>
            </form>

            @endauth

            @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}"><i class="fa-solid fa-right-to-bracket p-1"></i>Login</a>
        </li>
        @endguest



    </div>
    </li>

    </ul>

  </div>
  </div>
</nav>