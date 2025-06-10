<footer class="bg-body-primary  m-0 p-0 w-100 text-center @if(!request()->routeIs('article.index') && !request()->routeIs('home') && request()->routeIs('revisor.index')))  position-fixed bottom-0 @endif">
  <div class="d-flex text-center align-items-center justify-content-evenly p-3 bg-primary">
    @auth
    @if (!Auth::user()->is_revisor)
    <div class="text-light mt-2">
      <h5>{{__('ui.diventaRevisore')}}<a href="{{ route('become.revisor') }}" class="btn btn-light ms-2 rounded shadow">{{__('ui.clicca')}}</a></h5>
    </div>
    @endif
    @endauth

    @guest
    <div class="text-light mt-2">
      <h5>{{__('ui.diventaRevisore')}}<a href="{{ route('register') }}" class="btn btn-light ms-2 rounded shadow">{{__('ui.clicca')}}</a></h5>
    </div>
    @endguest

    <div class="d-flex">
      <span class="text-light p-2 fs-5"><i class="fa-brands fa-google"></i></span>
      <span class="text-light p-2 fs-5"><i class="fa-brands fa-instagram"></i></span>
      <span class="text-light p-2 fs-5"><i class="fa-brands fa-facebook-f"></i></span>
      <span class="text-light p-2 fs-5"><i class="fa-brands fa-youtube"></i></span>
    </div>
    <div>
      <span class="text-light">© 2025 Copyright:</span>
      <a class="text-light" href="https://mdbootstrap.com/">Presto.it</a>
    </div>
  </div>
</footer>