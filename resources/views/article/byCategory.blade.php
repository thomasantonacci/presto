<x-main-layout>
    <x-slot:title>Crea annuncio</x-slot:title>
    

    <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12 pt-5">
                <h1 class="display-2">{{__('ui.categoriaarticoli')}} <span
                        class="fst-italic text-primary fw-bold">{{ $category->name }}</span></h1>

            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
            <div class="col-12 col-md-3">
                <x-shared.card :article="$article" />
            </div>
            @empty
            <div class="col-12 text-center">
                <h3>

                    {{__('ui.noArticoli')}}
                </h3>
                @auth
                <a class="btn btn-dark rounded shadow my-5" href="{{route('create.article')}}">{{__('ui.creaQui')}}</a>
                @endauth
            </div>
            @endforelse
        </div>
    </div>

</x-main-layout>