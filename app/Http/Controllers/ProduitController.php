<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduit;

use App\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produits.index',[
            'produits' => Produit::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduit $request)
    {
        $data = $request->only(['libelle','reference']);
        
        $produit = Produit::create($data);

        $request->session()->flash('status', 'produit was created !! ');
       // return redirect('/posts');

        return redirect()->route('produits.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('produits.show', [
            'produit' => Produit::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Produit::findOrFail($id);
        return view('produits.edit',[
            'produit' => $produit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProduit $request, $id)
    {
        $produit = Produit::findOrFail($id);

        $produit->libelle = $request->input('libelle');
        $produit->reference = $request->input('reference');
    

        $produit->save();

        $request->session()->flash('status', 'product was updated !! ');
        // return redirect('/posts');
 
         return redirect()->route('produits.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();

        $request->session()->flash('status', 'Product was deleted !! ');
         return redirect()->route('produits.index');
    }
}
