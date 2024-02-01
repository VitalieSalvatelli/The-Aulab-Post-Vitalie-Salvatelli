<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $adminRequest = User::where('is_admin', NULL)->get();
        $revisorRequest = User::where('is_revisor', NULL)->get();
        $writerRequest = User::where('is_writer', NULL)->get();
        $tags = Tag::all();
        $category = Category::all();
        return view('admin.dashboard', compact('adminRequest', 'revisorRequest', 'writerRequest','tags', 'category'));
    }

    public function makeUserAdmin(User $user){

        $user->is_admin = true;
        $user->save();
        return redirect()->route('admin.dashboard')->with('success', 'Utente accettato con successo');

    }

    public function rejectUserAdmin(User $user){

        $user->is_admin = false;
        $user->save();
        return redirect()->route('admin.dashboard')->with('success', 'Utente rifiutato con successo');

    }

    public function makeUserRevisor(User $user){

        $user->is_revisor = true;
        $user->save();
        return redirect()->route('admin.dashboard')->with('success', 'Utente accettato con successo');

    }

    public function rejectUserRevisor(User $user){

        $user->is_revisor = false;
        $user->save();
        return redirect()->route('admin.dashboard')->with('success', 'Utente rifiutato con successo');

    }


    public function makeUserWriter(User $user){

        $user->is_writer = true;
        $user->save();
        return redirect()->route('admin.dashboard')->with('success', 'Utente accettato con successo');

    }

    public function rejectUserWriter(User $user){

        $user->is_writer = false;
        $user->save();
        return redirect()->route('admin.dashboard')->with('success', 'Utente rifiutato con successo');

    }


    public function editTag(Request $request, Tag $tag){
        $tag->update(
            [
                'name'=>$request->input('name')
            ]
        );
        return redirect()->route('admin.dashboard')->with('success', 'Tag aggiornato con successo');
    }

    public function deleteTag(Tag $tag){
        $tag->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Tag eliminato con successo');
    }

    public function storeTag(Request $request){
        Tag::create(['name'=>$request->input('name')]);
        return redirect()->route('admin.dashboard')->with('success', 'Tag creato con successo');
    }

    public function editCategory(Request $request, Category $category){
        $category->update(
            [
                'name'=>$request->input('name')
            ]
        );
        return redirect()->route('admin.dashboard')->with('success', 'Categoria aggiornata con successo');
    }

    public function deleteCategory(Category $category){
        $category->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Categoria eliminata con successo');
    }

    public function storeCategory(Request $request){
        Category::create(['name'=>$request->input('name')]);
        return redirect()->route('admin.dashboard')->with('success', 'Categoria creata con successo');
    }
 
}
