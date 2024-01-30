<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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

        $article->slug = Str::slug($request->title);

        if ($request->has('image')) {
            $article->image=$request->file('image')->storeAs('public/images/'.$article->id,'copertina.jpg');
        }

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
        $categories = Category::all();
        return view('articles.show', compact('article','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $tags = Tag::all();
        return view('articles.edit', compact('article', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $article->is_accepted=false;
        if ($request->has('image')) {
            Storage::delete('public/images/'.$article->id);
            $article->update([
                'title'=>$request->input('title'),
                'subtitle'=>$request->input('subtitle'),
                'text'=>$request->input('text'),
                'image'=>$request->file('image')->storeAs('public/images/'.$article->id,'copertina.jpg'),
                'category_id'=>$request->input('category_id'),
                'slug'=>Str::slug($request->title),
            ]);

        }
        else{

            $article->update([
                'title'=>$request->input('title'),
                'subtitle'=>$request->input('subtitle'),
                'text'=>$request->input('text'),
                'category_id'=>$request->input('category_id'),
                'slug'=>Str::slug($request->title),
            ]);

        }

        $article->tags()->detach();
        $article->tags()->sync($request->input('tasg'));
        return redirect()->route('writer.dashboard')->with(["success"=>"Articolo modificato con successo"]);;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        Storage::delete('public/images/'.$article->id,'copertina.jpg');
        $article->delete();
        return redirect()->route('writer.dashboard')->with(["success"=>"Articolo Eliminato con successo"]);
    }

    public function articlesForCategory(Category $category){
    
        $articles = Article::where('category_id', $category->id)->where('is_accepted', true)->orderBy('created_at','desc')->paginate(6);

        return view('articles.category', compact('articles', 'category'));

    }

    public function articlesForUser(User $user){
        $articles = Article::where('user_id', $user->id)->where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);

        return view('articles.user', compact('articles','user'));
    }

    public function writerDashboard(){
        return view('writer.dashboard');
    }

}
