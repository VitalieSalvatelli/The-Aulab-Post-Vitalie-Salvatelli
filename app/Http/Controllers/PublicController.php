<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\RequestRoleMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home(){
        $articles = Article::where('is_accepted', true)->orderBy('created_at','desc')->paginate(6);
        return view('welcome',compact('articles'));
    }

    public function workWithUs(){
        return view('workWithUs');
    }

    public function sendRoleRequest(Request $request){

        // if (Auth::user()->is_writer == 1 ) {
            
        //     return redirect()->back()->with('message', 'Hai gia fatto richiesta per questa posizione');
        // }

       
        

        $user = Auth::user();
        $role = $request->input('role');
        $email = $request->input('email');
        $presentation = $request->input('presentation');

        switch ($role){
            case 'admin':
                if (Auth::user()->is_admin == 1 || Auth::user()->is_admin === NULL) {
                     
                    return redirect()->back()->with('message', 'Hai gia fatto richiesta per questa posizione');
                }
                break;
            case 'revisor':
                if (Auth::user()->is_revisor == 1 || Auth::user()->is_revisor === NULL) {
                    
                    return redirect()->back()->with('message', 'Hai gia fatto richiesta per questa posizione');
                }
                break;
            case 'writer':
                if (Auth::user()->is_writer == 1 || Auth::user()->is_writer === NULL) {
                    
                    return redirect()->back()->with('message', 'Hai gia fatto richiesta per questa posizione');
                }
                break;
        }


        $requestMail = new RequestRoleMail(compact('role', 'email', 'presentation'));
        Mail::to('Admin@aulabpost.it')->send($requestMail);
        switch ($role){
            case 'admin':
                $user->is_admin = NULL;
                break;
            case 'revisor':
                $user->is_revisor = NULL;
                break;
            case 'writer':
                $user->is_writer = NULL;
                break;
        }
        $user->update();
        return redirect()->route('home')->with('success', 'grazie per averci contattati');
    }

    public function searchArticle(Request $request){
        $key = $request->input('key');
        $articles=Article::search($key)->where('is_accepted', true)->paginate(6);
        return view('articles.search', compact('articles', 'key'));
    }

}
