@extends('layout')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Ajouter un nouveau produit</h1>
      <p class="lead">Ce formulaire vous aide à ajouter un nouveau produit</p>
    </div>
  </div>
<form method="POST" action="{{route('produits.store')}}">
    @csrf
   
    @include('produits.form')
    <button class="btn btn-block btn-primary" type="submit">Add Product</button>
</form>
@endsection