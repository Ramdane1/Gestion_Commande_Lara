<div class="form-group">
    <label for="title">Libelle</label>
    <input class="form-control" type="text" name="libelle" id="libelle" value="{{ old('libelle', $produit->libelle ?? null)}}">
</div>
<div class="form-group">
    <label for="content">Référence</label>
    <input class="form-control" type="text" name="reference" id="reference" value="{{ old('reference', $produit->reference ?? null)}}">
</div>

@if($errors->any())

<ul style="color: red">
    @foreach ($errors->all() as $error)
<li>{{ $error }}</li>
    @endforeach
    
</ul>
@endif