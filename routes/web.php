<?php

use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/produits', 'ProduitController');
Route::get('/', function () {
    return view('welcome');
});

Route::post('/produits/{produit}/store', 'CommandeController@store');
