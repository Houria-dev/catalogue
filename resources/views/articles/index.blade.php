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
       
        {{-- @php   
        $list=['artices', 'panier'];
        @endphp --}}
        <div class="row" style="margin-top:20px">
        @foreach($articles as $article)
        <div class="col-md-3" >
            <div class="profile-card-4 text-center d-flex flex-column align-items-center">
                
                <figure style="width:100px; height:100px">
                    @if($article->image!=null)
                    <img src="/storage/articles/{{$article->image}}" alt="" style="width:100%; height:100%">
                    @else
                    <img src="https://images.unsplash.com/photo-1567187979900-65e3b7b050a9?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Njl8fGFydCUyMGdhbGxlcnl8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="" style="width:100%; height:100%">
                    @endif
                </figure>
                
            
                <div class="profile-content">
                   
                    <div class="profile-description" style="color: #091740; width: 100%;">
                        <p><strong>{{$article->title}}</strong></p>
                        @if(!empty($article->categorie))
                        <p><strong>Catégorie:</strong>{{$article->categorie->name}}</p>
                        @endif
                        <p style="word-break: break-all;"><strong>Description:</strong>{{ substr($article->description, 0,20)."..."}}</p>
                        <p class="card-text"><strong>Prix:</strong><small class="text-muted"><b>{{$article->price}}€</b></small></p>
                        <div class="btn-group btn-group-sm" style="margin-bottom:20px">
                            <a href="{{route('articles_show', $article->id)}}" class="btn btn-primary active" aria-current="page">Afficher</a>
                            <a href="{{route('panier_add',$article->id)}}" class="btn btn-warning">Ajouter au panier</a>
                        </div>
                    </div>
                    
                </div>
            </div>
               
                    
            
         
    </div>
    @endforeach  
</div>
    
@endsection  


