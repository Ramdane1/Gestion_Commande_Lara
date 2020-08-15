<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{

    protected $fillable = ['produit_id','nom', 'adresse', 'ville','tel','quantite','type_couleur','prix','confirmation01',
                            'confirmation02','methode_livraison','tracking','etat_payement','etat_livraison','date_livraison','news_lettre'];
    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
