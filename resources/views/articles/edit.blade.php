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
        <form   method="POST" action="{{route('articles_update', $article->id)}}" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Titre</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title"  value="{{$article->title}}" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Prix</label>
                <input type="number" class="form-control" id="exampleFormControlInput2" name="price" value="{{$article->price}}" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" value="{{$article->description}}"></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label"> Remplacer l'image: ({{$article->image}})</label>
                <input class="form-control" type="file" name="image" id="formFile" >
            </div>
            <div class="mb-3">
                <label for="select" class="form-label">Catégorie</label>
                <select class="form-select" aria-label="Default select example" name="categorie">
                    <label>choisir une catégorie</label>
                    @foreach($categories as $categorie)
                       <option value="{{$categorie->id}}"  {{$categorie->id==$article->categorie_id? 'selected': ''}}>{{ $categorie->name}}</option>
                   @endforeach
                </select>
            </div>    
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Sauvegarder</button>
              </div>
        </form>    
    </div>    

@endsection    
