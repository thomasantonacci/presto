<div class="card mx-auto p-2 card-w rounded shadow text-center mb-3 myborder border-primary">
    <img src="{{ $article->images->isNotEmpty() ? Storage::url($article->images->first()->path) : 'https://picsum.photos/200'}}" class="card-img-top" alt="Immagine dell'articolo {{$article->title}}">
    <div class="card-body">
        <div class="altezzatitolo">
            <h4 class="card-title">{{ $article->title }}</h4>
        <h6 class="card-subtitle mt-4 text-body-secondary">{{ $article->price }} €</h6>
        </div>
        
        <div class="d-flex flex-column justify-content-evenly align-items-center mt-5">
            <a href="{{route('article.show', compact('article'))}}" class="btn mb-2 rounded btn-primary"><i class="fa-solid p-1 fa-circle-info"></i></i>{{__('ui.dettaglioCard')}}</a>
            <a href="{{ route('byCategory', ['category' => $article->category]) }}"class="btn rounded btn-outline-info"><i class="fa-solid p-1 fa-list-ul"></i>{{__("ui." . $article->category->name) }}</a>
        </div>
    </div>
</div>