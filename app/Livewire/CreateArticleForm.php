<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateArticleForm extends Component
{
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
        session()->flash('success', 'Articolo creato con successo');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-article-form');
    }
}
