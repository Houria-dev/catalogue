<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Cocur\Slugify\Slugify;
use Illuminate\Http\Request;

class ArticleController extends Controller
{   
    // Public function __construct()
    // {
    //     $this->middleware('auth');
    // }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $articles=Article::all();
       return view('articles.index', ['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categorie::all();
        return view('articles.new', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $article=new Article();
        $slug=new Slugify();
        $article->title=$request->input('title');
        $article->slug=($slug->slugify($article->title));
        $article->price=$request->input('price');
        $article->description=$request->input('description');
        $article->categorie_id=$request->input('categorie');
        $image=$request->file('image');
        $imageFullName=$image->getClientOriginalName();
        $imageName=pathinfo($imageFullName, PATHINFO_FILENAME);
        $extension=$image->getClientOriginalExtension();
        $file=time().'_'.$imageName.'.'.$extension;
        $image->storeAs('public/articles', $file);
        $article->image=$file;
        $article->save();
        return redirect()->route('articles');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article=Article::find($id);
        return view('articles.show',['article'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article=Article::find($id);
        $categories=Categorie::all();
        return view('articles.edit',['article'=>$article, 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article=Article::find($id);
        $slug=new Slugify();
        $article->title=$request->input('title');
        $article->slug=($slug->slugify($article->title));
        $article->price=$request->input('price');
        $article->description=$request->input('description');
        $article->categorie_id=$request->input('categorie');
        if($request->file('image'))
        {   $image=$request->file('image');
            $imageFullName=$image->getClientOriginalName();
            $imageName=pathinfo($imageFullName, PATHINFO_FILENAME);
            $extension=$image->getClientOriginalExtension();
            $file=time().'_'.$imageName.'.'.$extension;
            $image->storeAs('public/articles', $file);
            $article->image=$file;
        }    
        $article->save();
        return redirect()->route('articles'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article=Article::find($id);
        $article->delete();
        return redirect()->route('articles');
    }
}
