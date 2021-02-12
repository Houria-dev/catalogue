<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie=new Categorie();
        $categorie->icon="tableaux.jpg";
        $categorie->name="tableaux de peinture";
        $categorie->save();

        $categorie=new Categorie();
        $categorie->icon="sculpture.jpg";
        $categorie->name="sculpture";
        $categorie->save();
        
        $categorie=new Categorie();
        $categorie->icon="dessin.jpg";
        $categorie->name="dessin";
        $categorie->save();


        $categorie=new Categorie();
        $categorie->icon="objets.jpg";
        $categorie->name="objets d'arts";
        $categorie->save();
    }
}
