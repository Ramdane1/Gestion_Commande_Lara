@extends('layout')

@section('content')


<div class="jumbotron">
    <h1 class="display-4">{{$produit->libelle}}</h1>
    <p class="lead">description a ajouter</p>
    <hr class="my-4">
    <p>{{$produit->reference}}</p>
    <em>{{$produit->created_at->diffForHumans()}}</em>
    <hr class="my-4">
    <a class="btn btn-primary" href="{{route('produits.index')}}" role="button">Retour vers liste des produits</a>
</div>



    
@endsection