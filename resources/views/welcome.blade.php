<x-main-layout>
    <x-slot:title>Home</x-slot:title>
    @if (session()->has('errorMessage'))
    <div class="alert alert-danger text-center shadow rounded w-100">{{session('errorMessage')}}</div>
    @endif
    @if (session()->has('message'))
    <div class="alert alert-danger text-center shadow rounded w-100">{{session('message')}}</div>
    @endif
    <x-shared.hero-section />
    <x-shared.section-title title="Gli ultimi annunci.." subtitle="" />

    <div class="container">
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
            <div class="col-12 col-md-3 ">
                <x-shared.card :article="$article" />
            </div>
            @empty
            <div class="col-12">
                <h3 class="text-center">
                    Non sono ancora stati creati articoli
                </h3>
            </div>
            @endforelse
        </div>
    </div>



</x-main-layout>