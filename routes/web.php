<?php

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

Route::get('/', function () {
    return view('Home');
});



Route::get('/produits/{cat}', function ($cat) {
    $produits=[];

	if($cat=='manteaux'){
	$produits=array(
                    array(
                         "nom" => "Manteau À Doublure En Tissu Duveteux Zippé Ceinturé",
                         "prix"=>400,
                         "image" => "monteaux-1.PNG"
                          ),
                     array(
                         "nom" => "Doudoune À Bouton En Velours Côtelé",
                         "prix"=>300,
                         "image" => "monteaux-2.PNG"
                          ),
                      array(
                         "nom" => "Manteau duveteux col à revers à bouton",
                         "prix"=>280,
                         "image" => "monteaux-3.PNG"
                          )
                 );



	}
	else if($cat=='accessoires')
	{
	$produits=array(
                    array(
                         "nom" => "4 Pièces Clips De Griffe De Cheveux",
                         "prix"=>50,
                         "image" => "accessoires-1.PNG"
                          ),
                     array(
                         "nom" => "Boucles D'oreilles Décoratives En Perles Artificielles",
                         "prix"=>100,
                         "image" => "accessoires-2.PNG"
                          ),
                      array(
                         "nom" => "4 Bandeaux De Couleur Unie Adaptés À L'exercice Quotidien",
                         "prix"=>80,
                         "image" => "accessoires-3.PNG"
                          )
                 );

	}
    else if($cat=='blazer')
	{
	$produits=array(
                    array(
                         "nom" => "Gilet à carreaux col à revers à bouton & Short",
                         "prix"=>250,
                         "image" => "blazer-1.PNG"
                          ),
                     array(
                         "nom" => " Blazer sans manches à pied-de-poule à bouton sans pull",
                         "prix"=>190,
                         "image" => "blazer-2.PNG"
                          ),
                      array(
                         "nom" => "Blazer col à revers à bouton & Pantalon ample",
                         "prix"=>350,
                         "image" => "blazer-3.PNG"
                          )
                 );

	}

	return view('Produits', [
        'products' => $produits,
        'categorie' => $cat
    ]);
    
});
