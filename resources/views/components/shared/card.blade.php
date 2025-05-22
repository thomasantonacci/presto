<div class="card mx-auto card-w myheight rounded shadow border-3 text-center mb-3">
    <img src="https://picsum.photos/200" class="card-img-top" alt="Immagine dell'articolo {{$article->title}}">
    <div class="card-body">
        <div class="altezzatitolo">
            <h4 class="card-title">{{ $article->title }}</h4>
        <h6 class="card-subtitle mt-4 text-body-secondary">{{ $article->price }} €</h6>
        </div>
        
        <div class="d-flex justify-content-evenly align-items-center mt-5">
            <a href="{{route('article.show', compact('article'))}}" class="btn rounded btn-primary">Dettaglio</a>
            <a href="" class="btn rounded btn-outline-info">Categoria</a>
        </div>
    </div>
</div>