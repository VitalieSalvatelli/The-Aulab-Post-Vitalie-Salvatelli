<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //mette in relazione categorie e articoli specificando che una categoria puo appartenere a piu articoli
    public function articles(){
        return $this->hasMany(Article::class);
    }

}
