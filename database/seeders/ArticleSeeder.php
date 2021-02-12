<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Categorie;
use Cocur\Slugify\Slugify;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        $article=new Article();
        $article->title="Tableau de peinture";
        $article->price=2000;
        $slugify = new Slugify();
        $article->slug=$slugify->slugify($article->title); 
        $article->image="tableaux.jpg";
        $article->categorie_id=Categorie::all()->random(1)->first()->id;
        $article->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempor lorem arcu, nec posuere magna pharetra sit amet. Nulla id vulputate risus, feugiat fringilla nisl. Nullam in ligula euismod, blandit eros in, vehicula ipsum. Praesent facilisis a libero in ultricies. Morbi consequat posuere nibh sit amet ullamcorper. ";
        $article->save();



        $article=new Article();
        $article->title="Sculpture de célebrité";
        $article->price=30000;
        $slugify = new Slugify();
        $article->slug=$slugify->slugify($article->title); 
        $article->image="sculpture.jpg";
        $article->categorie_id=Categorie::all()->random(1)->first()->id;
        $article->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempor lorem arcu, nec posuere magna pharetra sit amet. Nulla id vulputate risus, feugiat fringilla nisl. Nullam in ligula euismod, blandit eros in, vehicula ipsum. Praesent facilisis a libero in ultricies. Morbi consequat posuere nibh sit amet ullamcorper. ";
        $article->save();


        $article=new Article();
        $article->title="Jolie dessin";
        $article->price=30000;
        $slugify = new Slugify();
        $article->slug=$slugify->slugify($article->title); 
        $article->image="dassin.jpg";
        $article->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempor lorem arcu, nec posuere magna pharetra sit amet. Nulla id vulputate risus, feugiat fringilla nisl. Nullam in ligula euismod, blandit eros in, vehicula ipsum. Praesent facilisis a libero in ultricies. Morbi consequat posuere nibh sit amet ullamcorper. ";
        $article->categorie_id=Categorie::all()->random(1)->first()->id;
        $article->save();
        
    }
}
