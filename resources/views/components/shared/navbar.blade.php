<nav class="navbar sticky-top navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="d-flex justify-content-between container-fluid">
    <!-- <li class="nav-item dropdown"> -->
      <a class="nav-link nav-item dropdown dropdown-toggle text-light me-5" href="#" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">Lingua</a>
      <ul class="dropdown-menu">

        <li><a class="dropdown-item text-light">
            <x-_locale lang="it" />
          </a>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item text-light">
            <x-_locale lang="en" />
          </a>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item text-light">
            <x-_locale lang="es" />
          </a>
        </li>
      </ul>
    </li>
    <a class="navbar-brand myfont ms-5" href="{{route('home')}}"><img class="img-fluid mylogo m-0 p-0"src="{{ asset('images/Presto_logo.png')}}" alt="Logo">resto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('home')}}"><i class="fa-solid p-1  fa-house"></i>{{__('ui.home')}}<span class="visually-hidden">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}"><i class="fa-solid p-1 fa-newspaper"></i>{{__('ui.allArticles')}}</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="fa-solid p-1 fa-list-ul"></i>{{__('ui.allCategories')}}</a>
          <ul class="dropdown-menu">
            @foreach ($categories as $category)
            <li><a class="dropdown-item text-light"
                href="{{route('byCategory',['category' => $category])}}">{{__("ui.$category->name") }}</a>
              @if (!$loop->last)
              <hr class="dropdown-divider">
              @endif
              @endforeach
            </li>
          </ul>
        </li>

        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('create.article')}}"><i class="fa-solid p-1 fa-file-circle-plus"></i>{{__('ui.creaAnnuncio')}}</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa-solid p-1 fa-user"></i>{{auth()->user()->name}}</a>
          <div class="dropdown-menu">
            <a class="dropdown-item text-light" href="#">{{__('ui.profiloUtente')}}</a>
            @if (Auth::user()->is_revisor)
            <a class="position-relative btn-sm dropdown-item text-light" href="{{route('revisor.index')}}">{{__('ui.revisore')}}<span class="position-absolute top-0 ms-2 mt-1 traslate-middle badge rounded-pill bg-danger">{{\App\Models\Article::toBeRevisedCount()}}</span></a>
            @endif
            <!-- <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a> -->
            <div class="dropdown-divider"></div>
            <form class="nav-link d-flex justify-content-center align-items-center" action="{{route('logout')}}" method="POST">
              @csrf
              <button type="submit" class="btn p-0 m-0 text-danger"> <i class="fa-solid p-1 text-danger fa-right-from-bracket"></i>{{__('ui.logout')}}</button>
            </form>

            @endauth

            @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}"><i class="fa-solid fa-right-to-bracket p-1"></i>{{__('ui.login')}}</a>
        </li>
        @endguest
    </div>
    </li>
    </ul>

    <form class="d-flex" role="search" action="{{route('article.search')}}" method="GET">
      <div class="input-group">
        <input size="30" type="search" name="query" class="form-control rounded mysearch" placeholder="{{__('ui.search')}}" aria-label="search">
        <button type="submit" class="input-group-text btn btn-outline-light rounded shadow ms-2" id="basic-addon2">{{__('ui.search')}}</button>
      </div>
    </form>
  </div>
  </div>
</nav>