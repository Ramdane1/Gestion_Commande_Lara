@extends('layout')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Modifier un produit</h1>
      <p class="lead">Ce formulaire vous aide à modifier un produit</p>

      <hr class="my-4">
    <a class="btn btn-primary" href="{{route('produits.index')}}" role="button">Retour vers liste des produits</a>
    </div>
  </div>

<form method="POST" action="{{route('produits.update', ['produit' => $produit->id])}}">
    @csrf
    @method('PUT')

    @include('produits.form')
   
    <button class="btn btn-block btn-warning" type="submit">Update Product</button>
</form>
@endsection