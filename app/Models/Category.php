<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //mette in relazione categorie e articoli specificando che una categoria puo appartenere a piu articoli
    public function articles(){
        return $this->hasMany(Article::class);
    }

}
