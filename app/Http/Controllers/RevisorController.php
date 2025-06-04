<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\BecomeRevisor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function index()
    {
        $article_to_check = Article::where('is_accepted', null)->first();
        // $format_number_no_rounding = function($number, $decimals = 2) {
        // $factor = pow(10, $decimals);
        // $truncated = floor($number * $factor) / $factor;
        // return number_format($truncated, $decimals, ',', '.');
        // $formatted_number = $article_to_check->price;
    
        return view('revisor.index', compact('article_to_check'));
    }
    
    public function accept(Article $article)
    {
        $article->setAccepted(true);
        return redirect()->back()->with('message', "Hai accettato l'articolo $article->title");
    }
    public function reject(Article $article)
    {
        $article->setAccepted(false);
        return redirect()->back()->with('message', "Hai rifiutato l'articolo $article->title");
    }

    public function becomeRevisor()
    {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->route('home')->with('message', 'Complimenti, hai richiesto di diventare revisore.');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('app:make-user-revisor', [
            'email' => $user->email
        ]);
        return redirect()->back();
    }
}
