<x-main-layout>
    <x-slot:title>{{__('ui.dettaglio')}} {{ $article->title }}</x-slot:title>

    <div class="container">
        <div class="row height-custom justify-content-center align-items-center text-center mt-4">
            <div class="col-12">
                <h1 class="text-primary">{{__('ui.dettaglio')}}</h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center  py-5">
            <div class="col-12 col-md-6 mb-3 ">
                @if ($article->images->count()>0)
                <div id="carouselExample" class="carousel slide  rounded border-primary shadow">
                    <div class="carousel-inner rounded">
                        @foreach ($article->images as $key=> $image)
                        <div class="carousel-item @if ($loop->first) active @endif ">
                            <img src="{{ $image->getUrl(400,400) }}" class="d-block w-100 rounded shadow" alt=" Immagine {{ $key + 1}} dell'articolo {{ $article->title }} ">
                        </div>
                        @endforeach
                    </div>
                    @if ($article->images->count()>1)
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    @endif
                </div>
                @else
                <img class="rounded shadow" src="https://picsum.photos/636" alt="Nessuna foto inserita dall'utente">
                @endif
            </div>
            <div class="col-12 col-md-6 height-custom text-center">
                <h2 class=""><span class="myfont2 text-primary fw-bold">{{__('ui.titolo')}}: </span> {{ $article->title }}</h2>
                <div class=" d-flex flex-column align-items-between">
                    <h4> <span class="myfont2 text-primary fw-bold">{{__('ui.prezzo')}}: </span>{{ $article->price }}€ </h4>
                    <h5 class="myfont2 pt-5 text-primary fw-bold">{{__('ui.descrizione')}}: </h5>
                    <p>{{ $article->description }}</p>
                    <div class="py-5 fs-4">
                        <a href="{{route('article.index')}}" class="text-decoration-none">
                            <p><i class="fa-solid fa-backward-step p-2"></i>{{__('ui.torna')}}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-main-layout>