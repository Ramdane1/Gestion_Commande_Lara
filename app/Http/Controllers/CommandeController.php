<?php

namespace App\Http\Controllers;
use App\Commande;
use App\Produit;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function store(Produit $produit){
        Commande::create([
            'produit_id' => $produit->id,
            'nom' => request('nom'),
            'adresse' => request('adresse'),
            'ville' => request('ville'),
            'tel' => request('tel'),
            'quantite' => request('quantite'),
            'type_couleur' => request('type_couleur'),
            'prix' => request('prix'),
            'confirmation01' => request('confirmation01'),
            'confirmation02' => request('confirmation02'),
            'methode_livraison' => request('methode_livraison'),
            'tracking' => request('tracking'),
            'etat_payement' => request('etat_payement'),
            'etat_livraison' => request('etat_livraison'),
            'date_livraison' => request('date_livraison'),
            'news_lettre' => request('news_lettre'),

        ]);

        return redirect('/produits');
    }
}
