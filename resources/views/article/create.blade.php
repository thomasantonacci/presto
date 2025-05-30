<x-main-layout>
    <x-slot:title>{{__('ui.crea')}}</x-slot:title>
    <x-shared.section-title title="{{__('ui.creaQui')}}" subtitle="" />
    <div class="container">
        <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6">
            <livewire:create-article-form />
        </div>
    </div>
    </div>
    

</x-main-layout>