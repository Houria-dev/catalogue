<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{   
    Public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

        return view('cart.index');
    }

    public function add($id)
    {
        $article=Article::find($id);
        $add=\Cart::session(Auth::user()->id)->add(array(
            'id' => $article->id,
            'name' => $article->title,
            'price' => $article->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $article
        ));
        return redirect()->route('panier');
    }
}
