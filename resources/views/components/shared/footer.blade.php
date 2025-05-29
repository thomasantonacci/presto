<footer class="bg-body-primary mt-3 w-100 text-center">
  <div class="d-flex text-center align-items-center justify-content-evenly p-3 bg-primary">
    @auth
    @if (!Auth::user()->is_revisor)
    <div class="text-light">
      <h5>{{__('ui.diventaRevisore')}}<a href="{{ route('become.revisor') }}" class="btn btn-light ms-2 rounded shadow">{{__('ui.clicca')}}</a></h5>
    </div>
    @endif
    @endauth

    @guest
    <div class="text-light">
      <h5>{{__('ui.diventaRevisore')}}<a href="{{ route('become.revisor') }}" class="btn btn-light ms-2 rounded shadow">{{__('ui.clicca')}}</a></h5>
    </div>
    @endguest
    <div>
      <span class="text-light">© 2025 Copyright:</span>
      <a class="text-light" href="https://mdbootstrap.com/">Presto.it</a>
    </div>
  </div>
</footer>