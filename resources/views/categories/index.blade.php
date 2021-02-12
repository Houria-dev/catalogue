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
    <div class="container" style="margin-top: 10px">
        
        {{-- @php   
        $list=['artices', 'panier'];
        @endphp --}}
        <div class="row">
            @foreach($categories as $categorie)
                <div class="col-md-3">
                    <div class="profile-card-4 text-center d-flex flex-column align-items-center">
                        

                    
                            @switch($categorie->name)
                            @case("tableaux de peinture")
                                <figure style="width:100px;height:100px"> 
                                <img src="https://images.unsplash.com/photo-1572947650440-e8a97ef053b2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt=""  style="width:100%;height:100%">
                                </figure>
                                @break

                            @case("sculpture")
                                <figure style="width:100px;height:100px" >
                                <img src="https://images.unsplash.com/photo-1567165064443-ccd79f0eb3f5?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTl8fHNjdWxwdHVyZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="" style="width:100%;height:100%">
                                </figure>
                                @break

                            @default
                            <figure style="width:100px;height:100px">
                            <img src="https://images.unsplash.com/photo-1564399579883-451a5d44ec08?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NjB8fGFydCUyMGdhbGxlcnl8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="" style="width:100%;height:100%">
                            </figure>
                        @endswitch
                            
                            
                    
                    
                    </div>    
                        
                        
                        
                    
                    <div class="profile-content">
                    
                        <div class="profile-description" style="color: #091740; width: 100%;">
                            <p><strong>Catégorie:</strong>{{$categorie->name}}</p>
                            <p>Les oeuvres:</p>
                            <ul>
                                
                                @foreach($categorie->articles as $article)
                                    <li>
                                        <a href="{{route('articles_show', $article->id)}}" aria-current="page">{{$article->title }}</a> 
                                    </li>  

                                @endforeach
                            </ul>
                        </div>
                        
                    </div>
                    
                    
                            
                    
                
                </div>
            @endforeach  
         </div>
     </div>     
    
@endsection  


