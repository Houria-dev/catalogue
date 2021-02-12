<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable=['title', 'price','description', 'image', 'slug'];

    public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie'); 
    }

}
