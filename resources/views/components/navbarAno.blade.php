<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Catalogue</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
              
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('categories') }}">Categories</a>
                 </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('articles') }}">Nos produits</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('panier') }}">Panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('login') }}">
                     Se connecter
                   </a>
                </li>
                
            </ul>
        </div>
    </div>
 </nav>

