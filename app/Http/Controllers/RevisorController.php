<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RevisorController extends Controller
{

    public function revisorDashboard(){

        $articles= Article::where('is_accepted', false)->where('user_id','!=', Auth::id())->get();

        // foreach ($articles as $article) {
        //     $articles = Article::where(Auth::id()!=$article->user->id);
        // }

        return view('revisor.dashboard', compact('articles'));

    }

    public function articleDetail(Article $article){
        return view('revisor.article-detail', compact('article'));
    }

    public function acceptArticle(Article $article){
        $article->is_accepted = true;
        $article->save();

        return redirect()->route('revisor.dashboard')->with(["success"=>"Articolo accettato con successo"]);
    }

    public function rejectArticle(Article $article){
        $article->is_accepted = NULL;
        $article->save();

        return redirect()->route('revisor.dashboard')->with(["success"=>"Articolo rifiutato con successo"]);
    }
    
}
