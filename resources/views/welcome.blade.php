<x-main-layout>
    <x-slot:title>{{__('ui.home')}}</x-slot:title>
    @if (session()->has('errorMessage'))
    <div class="alert alert-danger text-center shadow rounded w-100">{{session('errorMessage')}}</div>
    @endif
    @if (session()->has('message'))
    <div class="alert alert-danger text-center shadow rounded w-100">{{session('message')}}</div>
    @endif
    <x-shared.hero-section />
    <x-animation />
    <x-shared.section-title title="{{__('ui.ultimi')}}" subtitle="" />
    <div class="container">
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
            <div class="col-12 col-md-4 ">
                <x-shared.card :article="$article" />
            </div>
            @empty
            <div class="col-12">
                <h3 class="text-center">{{__('ui.noArticoli')}}</h3>
            </div>
            @endforelse
        </div>
    </div>



</x-main-layout>