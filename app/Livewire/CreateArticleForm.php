<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateArticleForm extends Component
{
    use WithFileUploads;
   
    public $images = [];
    #[Validate('image', message: 'Il file deve essere un immagine')]
    // #[Validate('dimensions:min_height=400,min_width=400', message:'L immagine deve essere alta minimo 400 px')]
    // #[Validate('dimensions:min_width=400', message:"L'immagine deve essere larga almeno 400px")]
    #[Validate('max:1024', message: 'Il file deve essere massimo di 1MB')]
    #[Validate('max:6', message: 'Non è possibile caricare più di 6 foto')]
    public $temporary_images;
    #[Validate('min:5', message: 'Il campo titolo deve contenere almeno 5 caratteri')]
    #[Validate('required', message: 'Il campo titolo è obbligatorio')]
    public $title;

    #[Validate('required', message: 'Il campo descrizione è obbligatorio')]
    #[Validate('min:10', message: 'Il campo descrizione deve contenere almeno 10 caratteri')]
    public $description;
    #[Validate('required', message: 'Il campo prezzo è obbligatorio')]
    #[Validate('numeric', message: 'Il campo prezzo deve contenere obbligatoriamente numeri')]
    public $price;
    #[Validate('required', message: 'Il campo categoria è obbligatorio')]
    public $category;
    public $article;

    public function store()
    {
        $this->validate();
        $this->article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id()

        ]);
        if (count($this->images)>0){
            foreach($this->images as $image){
                $newFileName ="articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path'=> $image->store($newFileName,'public')]);
                dispatch(new ResizeImage($newImage->path,400,400));
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        session()->flash('success', 'Articolo creato con successo');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-article-form');
    }
    public function updatedTemporaryImages() {
        if ($this->validate([
            'temporary_images.*'=> 'image|max:1024|dimensions:min_width=400,min_height=400',
            'temporary_images' =>'max:6'
        ], ['temporary_images.*.max'=>"L immagine deve essere max 1MB", 'temporary_images.*.dimensions'=>"L'immagine deve essere 400x400 px",'temporary_images.max'=>"Non è possibile caricare più di 6 foto"])) {
            foreach($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }
    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }
}
