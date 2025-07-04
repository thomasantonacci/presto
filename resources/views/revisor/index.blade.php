<x-main-layout>
    <x-slot:title>{{__('ui.revisore')}}</x-slot:title>
    <div class="container-fluid align-items-center pt-4  ">
        <div class="row">
            <div class="col-3 mx-auto">
                <h1 class="display-5 d-flex text-center justify-content-center align-items-center text-primary fw-bold">
                    {{__('ui.revisore')}}
                </h1>
            </div>
        </div>
        @if (session()->has('message'))
        <div class="row justify-content-center">
            <div class="col-5 alert alert-success text-center shadow rounded">
                {{ session('message')}}
            </div>
        </div>
        @endif
        <div class="row d-flex align-items-center flex-column  justify-content-evenly mt-4 ">
            @if ($article_to_check)
            @if ($article_to_check->images->count())
            <div id="carouselExample" class="myrevisorimage w-100 carousel slide rounded">
                <div class="carousel-inner  rounded">
                    <div class="row">
                        @foreach ($article_to_check->images as $key=> $image)

                        <div class="col-4 ps-3">
                            <div class="carousel-item @if ($loop->first) active @endif ">
                                <img src="{{ $image->getUrl(400,400) }}" class=" w-100 rounded shadow" alt=" Immagine {{ $key + 1}} dell'articolo {{ $article_to_check->title }} ">
                            </div>
                        </div>

                        <div class="col-4 d-flex flex-column align-items-center ps-3 ">
                            <div class="card-body ">
                                <h5>Labels</h5>
                                @if ($image->labels)
                                @foreach ($image->labels as $label)
                                <span class="badge bg-primary">{{ $label }} </span>
                                @endforeach
                                @else
                                <p class="fst-italic  text-center">No labels</p>
                                @endif
                            </div>
                            <div class="card-body">
                                <h5 class="pt-5 ps-3 pb-2">Ratings</h5>
                                <div class="row justify-content-center">
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class="text-center mx-auto {{ $image->adult }}">
                                            </div>
                                        </div>
                                        <div class="col-10">Adult</div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class=" text-center mx-auto {{ $image->violence }}">
                                            </div>
                                        </div>
                                        <div class="col-10">Violence</div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class=" text-center mx-auto {{ $image->spoof }}">
                                            </div>
                                        </div>
                                        <div class="col-10">Spoof</div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class=" text-center mx-auto {{ $image->racy }}">
                                            </div>
                                        </div>
                                        <div class="col-10">Racy</div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class=" text-center mx-auto {{ $image->medical }}">
                                            </div>
                                        </div>
                                        <div class="col-10">Medical</div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        @endforeach
                        <div class="col-4 ps-4 d-flex flex-column align-items-center justify-content-between">
                            <div>
                                <h1>{{ $article_to_check->title }}</h1>
                                <h3>Autore: {{ $article_to_check->user->name }} </h3>
                                <h4>{{ $article_to_check->price }}€</h4>
                                <h4 class="fst-italic text-muted">#{{ $article_to_check->category->name }}</h4>
                                <p class="h6">{{ $article_to_check->description }}</p>
                            </div>
                            <div class="pb-4">
                                <button type="button" class=" mt-3 mb-4 btn btn-danger py-2 px-5 fw-bold rounded shadow" data-bs-toggle="modal" data-bs-target="#exampleModal">{{__('ui.rifiuta')}}</button>
                                <button type="button" class=" mt-3 mb-4 btn btn-success py-2 px-5 fw-bold rounded shadow" data-bs-toggle="modal" data-bs-target="#exampleModal">{{__('ui.accetta')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($article_to_check->images->count()>1)
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

    @else
    @for ($i = 0; $i < 1; $i++)
        <div class="col-12 mb-4 text-center">
        <img src="https://picsum.photos/300" class="img-fluid rounded shadow" alt="immagine segnaposto">
        </div>

        @endfor
        <div class="col-4 ps-4 d-flex flex-column align-items-center justify-content-between">
                            <div>
                                <h1>{{ $article_to_check->title }}</h1>
                                <h3>Autore: {{ $article_to_check->user->name }} </h3>
                                <h4>{{ $article_to_check->price }}€</h4>
                                <h4 class="fst-italic text-muted">#{{ $article_to_check->category->name }}</h4>
                                <p class="h6">{{ $article_to_check->description }}</p>
                            </div>
                            <div class="pb-4">
                                <button type="button" class=" mt-3 mb-4 btn btn-danger py-2 px-5 fw-bold rounded shadow" data-bs-toggle="modal" data-bs-target="#exampleModal">{{__('ui.rifiuta')}}</button>
                                <button type="button" class=" mt-3 mb-4 btn btn-success py-2 px-5 fw-bold rounded shadow" data-bs-toggle="modal" data-bs-target="#exampleModal">{{__('ui.accetta')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @endif


        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-danger fw-bold" id="exampleModalLabel">{{__('ui.avviso')}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>{{__('ui.procedere')}}</p>
                    </div>
                    <div class="modal-footer">
                        <form action="{{route('accept', ['article'=>$article_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button id="btn-apri" class="btn btn-success py-2 px-5 fw-bold rounded shadow">{{__('ui.accetta')}} {{__('ui.annuncio')}}</button>
                        </form>
                        <form action="{{route('reject', ['article'=>$article_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-danger py-2 px-5 fw-bold rounded shadow">{{__('ui.rifiuta')}} {{__('ui.annuncio')}}</button>
                        </form>
                        <button type="button" class="btn btn-secondary rounded shadow" data-bs-dismiss="modal">{{__('ui.chiudi')}}</button>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="row justify-content-center align-items-center  text-center">
            <div class="col-12">
                <h1 class="fst-italic display-4">
                    {{__('ui.noarticoli')}}
                </h1>
                <a href="{{ route('home') }}" class="mt-5 btn btn-primary rounded shadow">{{__('ui.tohomepage')}}</a>
            </div>
        </div>
        @endif


        <!-- MODALE -->

</x-main-layout>