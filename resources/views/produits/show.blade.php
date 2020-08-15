@extends('layout')

@section('content')

<div class="row">
  <div class="col-md-6">

    <div class="jumbotron">
      <h1 class="display-4">{{$produit->libelle}}</h1>
      <p class="lead">description a ajouter</p>
      <hr class="my-4">
      <p>{{$produit->reference}}</p>
      <em>{{$produit->created_at->diffForHumans()}}</em>
      <hr class="my-4">
      <a class="btn btn-primary" href="{{route('produits.index')}}" role="button">Retour vers liste des produits</a>
  </div>

  </div>

  <div class="col-md-6">

            <h1>Ajouter une commande</h1>

            <form method="POST" action="/produits/{{$produit->id}}/store">

              {{ csrf_field() }}
              

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="content">Nom</label>
                    <input class="form-control" type="text" name="nom" id="nom" value="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="content">Tel</label>
                  <input class="form-control" type="text" name="tel" id="tel" value="">
              </div>
                </div>
              </div>

            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="content">Adresse</label>
                    <input class="form-control" type="text" name="adresse" id="adresse" value="">
                </div>
              </div>

              <div class="col-md-6">
                  <div class="form-group">
                    <label for="content">Ville</label>
                    <input class="form-control" type="text" name="ville" id="ville" value="">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <label for="content">Quantité</label>
                    <input class="form-control" type="text" name="quantite" id="quantite" value="">
                  </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="content">type-couleur</label>
                  <input class="form-control" type="text" name="type_couleur" id="type_couleur" value="">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="content">Prix</label>
                  <input class="form-control" type="text" name="prix" id="prix" value="">
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="content">Conf 01</label>
                  <input class="form-control" type="text" name="confirmation01" id="confirmation01" value="">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="content">Conf 02</label>
                  <input class="form-control" type="text" name="confirmation02" id="confirmation02" value="">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="content">Methode Liv</label>
                  <input class="form-control" type="text" name="methode_livraison" id="methode_livraison" value="">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="content">Tracking</label>
                  <input class="form-control" type="text" name="tracking" id="tracking" value="">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="content">Etat paiment</label>
                  <input class="form-control" type="text" name="etat_payement" id="etat_peyement" value="">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="content">Etat liv</label>
                  <input class="form-control" type="text" name="etat_livraison" id="etat_livraison" value="">
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="content">Date liv</label>
                  <input class="form-control" type="date" name="date_livraison" id="date_livraison" value="">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="content">News lettre</label>
                  <input class="form-control" type="text" name="news_lettre" id="news_lettre" value="">
                </div>
              </div>
            </div>

            

            

            

            <button class="btn btn-block btn-primary" type="submit">Add commande</button>
            </form>


  </div>
</div>




<h1>Liste des commandes </h1>

<table class="table table-striped table-dark">

  <input type="text" class="form-control filter-input" placeholder="Search here">
  <br>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Date de commande</th>
      <th scope="col">Nom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Ville</th>
      
      <th scope="col">Qtn</th>
      <th scope="col">Type / Couleur</th>
      <th scope="col">Prix</th>
      <th scope="col">Conf01</th>
      <th scope="col">Conf02</th>
    
      <th scope="col">Paiment</th>
      <th scope="col">Etat liv</th>
      
      
      <th scope="col">Actions</th>
    </tr>
  </thead>
  @foreach ($produit->commandes as $commande)
  <tbody>
    <tr>
      <th scope="row">{{$commande->id}}</th>
      <td>{{$commande->created_at->diffForHumans()}}</td>
      <td>{{$commande->nom}}</td>
      <td>{{$commande->adresse}}</td>
      <td>{{$commande->ville}}</td>
      
      <td>{{$commande->quantite}}</td>
      <td>{{$commande->type_couleur}}</td>
      <td>{{$commande->prix}}</td>
      <td>{{$commande->confirmation01}}</td>
      <td>{{$commande->confirmation02}}</td>
      
      <td>{{$commande->etat_payement}}</td>
      <td>{{$commande->etat_livraison}}</td>
      
     
    

      <td>
      
      <form style="display: inline" method="POST" action="{{route('produits.destroy', ['produit' => $produit->id])}}">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                </svg>
          </button>
      </form>
         

         <a href="{{route('produits.edit', ['produit' => $produit->id])}}">
              <button class="btn btn-warning">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                      <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                    </svg>
              </button> 
          
          </a>

         <a href="{{ route('produits.show', ['produit' => $produit->id]) }}"> 
              <button class="btn btn-primary">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                      <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                  </svg>
              </button>  
          </a>
      </td>

    </tr>
  </tbody>
  @endforeach
</table>






    
@endsection