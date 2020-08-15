<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['libelle', 'reference'];

  public function commandes(){
      return $this->hasMany(Commande::class);
  }
}
