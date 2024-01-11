<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
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

}
