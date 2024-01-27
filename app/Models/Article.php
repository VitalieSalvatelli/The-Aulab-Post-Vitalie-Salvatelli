<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, Searchable;
    protected $fillable=[
        'title',
        'subtitle',
        'text',
        'user_id',
        'category_id',
    ];

    //mette in relazione articoli e utenti specificando che un articolo appartiene a un solo utente
    public function user(){
        return $this->belongsTo(User::class);
    }

    //mette in relazione articoli e categorie specificando che un articolo appartiene a una sola categoria
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function toSearchableArray(){
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'text'=>$this->text,
            'category'=>$this->category
        ];
    }

}
