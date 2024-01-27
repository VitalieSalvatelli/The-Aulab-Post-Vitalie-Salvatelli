<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        return view('articles.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {

        $article=Auth::user()->articles()->create($request->all());

        $article->image=$request->file('image')->storeAs('public/images/'.$article->id,'copertina.jpg');

        $selectedTags = $request->input('tags');
        foreach($selectedTags as $tagId){
            $article->tags()->attach($tagId);
        }

        $article->save();


        return redirect()->route('home')->with('message','Articolo caricato correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }

    public function articlesForCategory(Category $category){
    
        $articles = Article::where('category_id', $category->id)->where('is_accepted', true)->orderBy('created_at','desc')->paginate(6);

        return view('articles.category', compact('articles', 'category'));

    }

    public function articlesForUser(User $user){
        $articles = Article::where('user_id', $user->id)->where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);

        return view('articles.user', compact('articles','user'));
    }

}
