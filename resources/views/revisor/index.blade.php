<x-main-layout>
    <x-slot:title>Zona Revisore</x-slot:title>
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-3 mx-auto">
                <h1 class="display-5 d-flex text-center justify-content-center align-items-center text-primary fw-bold">
                    Pannello Revisore
                </h1>
            </div>
        </div>
        @if ($article_to_check)
        <div class="row justify-content-center pt-5">
            @if (session()->has('message'))
            <div class="row justify-content-center">
                <div class="col-5 alert alert-success text-center shadow rounded">
                    {{ session('message')}}
                </div>
            </div>
            @endif

            <div class="col-md-8">
                <div class="row justify-content-center">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-6 col-md-4 mb-4 text-center">
                        <img src="https://picsum.photos/300" class="img-fluid rounded shadow" alt="immagine segnaposto">
                </div>
                @endfor
            </div>
        </div>
        <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
            <div>
                <h1>{{ $article_to_check->title }}</h1>
                <h3>Autore: {{ $article_to_check->user->name }} </h3>
                <h4>{{ $article_to_check->price }}€</h4>
                <h4 class="fst-italic text-muted">#{{ $article_to_check->category->name }}</h4>
                <p class="h6">{{ $article_to_check->description }}</p>
            </div>
            <div class="d-flex pb-4 justify-content-around">
                <button type="button" class="btn btn-danger py-2 px-5 fw-bold rounded shadow" data-bs-toggle="modal" data-bs-target="#exampleModal">Rifiuta</button>
                <button type="button" class="btn btn-success py-2 px-5 fw-bold rounded shadow" data-bs-toggle="modal" data-bs-target="#exampleModal">Accetta</button>
            </div>
        </div>
    </div>
    @else
    <div class="row justify-content-center align-items-center height-custom text-center">
        <div class="col-12">
            <h1 class="fst-italic display-4">
                Nessun articolo da revisionare
            </h1>
            <a href="{{ route('homepage') }}" class="mt-5 btn btn-success">Torna all'homepage</a>
        </div>
    </div>
    @endif
    </div>
    <!-- MODALE -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-danger fw-bold" id="exampleModalLabel">Avviso di conferma</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Sei sicuro di voler procedere?</p>
                </div>
                <div class="modal-footer">
                    <form action="{{route('accept', ['article'=>$article_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button id="btn-apri" class="btn btn-success py-2 px-5 fw-bold rounded shadow">Accetta annuncio</button>
                    </form>
                    <form action="{{route('reject', ['article'=>$article_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-danger py-2 px-5 fw-bold rounded shadow">Rifiuta annuncio</button>
                    </form>
                    <button type="button" class="btn btn-secondary rounded shadow" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>