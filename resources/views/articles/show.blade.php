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
        <div class="card mb-3" style="max-width: 540px;margin-top:20px">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="/storage/articles/{{$article->image}}" class="card-img" alt="galerie d'art">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">{{$article->description}}</p>
                    <p class="card-text"><b>Prix:</b>{{$article->price}}</p>
                    <p class="card-text"><b>Categorie:</b>{{$article->categorie->name}}</p>
    
                </div>
              </div>
            </div>
            <div class="btn-group btn-group-sm" style="margin-bottom:20px">
                <a href="{{route('articles_edit',$article->id)}}" class="btn btn-secondary">Modifier</a>
                <a href="{{route('articles_delete',$article->id)}}" class="btn btn-danger">Supprimer</a>
                <a href="{{route('articles')}}" class="btn btn-primary active" aria-current="page">Retour à la liste</a>
                <a href="{{route('panier_add',$article->id)}}" class="btn btn-warning">Ajouter au panier</a>
            </div>
        </div>

    </div>

@endsection  