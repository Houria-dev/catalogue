@extends('layouts.meta')
@section('titre', "catalogue d'ouvres d'art")

@section('contenu')

    <div class="nav-menu">
        @if (Auth::check())
        @include('components.navbar')  
        @else
        @include('components.navbarAno') 
        @endif
    </div>

    
    <div class="container">
        @foreach(\Cart::session(Auth::user()->id)->getContent() as $article)  
            <div class="container" style="width:60%; margin-top:20px; border:1px gray dashed; display:flex;justify-content:space-around; align-items:center position:relative">
                <figure style="width:25%;height:60px; margin:10px auto">
                    <img  src="storage/articles/{{$article->model->image}}" alt="" style="width:100%;height:100%">
                </figure>
                <div style="width:25%;height:60px; margin:10px auto"> 
                {{$article->model->title}}<br>  
                <b>Prix</b>: {{$article->model->price}}€
                </div>
                <div style="width:25%;height:60px; margin:10px auto">
                    <a href="{{route('articles_show',$article->model->id)}}" class="btn btn-info btn-sm"> afficher</a>
                    <a href="#" class="btn btn-danger btn-sm"> Supprimer</a>
                </div>
            
            </div>
        @endforeach    
        <div style="width:100px;margin:10px auto">
             <span style="color:red">Total</span>{{\Cart::getTotal()}}€
            <a href="#" class="btn btn-warning btn-sm"> Valider le panier</a>
        </div>  
    </div>
@endsection        