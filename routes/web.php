<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\Store_ajout_produit_categorie;
use App\Http\Controllers\Store_appreciation;
use App\Http\Controllers\Store_produitController;
use App\Http\Controllers\Store_slideController;
use App\Http\Controllers\Store_serviceController;

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
    return view('pages.dashbord');
});
Route::get('/dashbord', [DashbordController::class,'dashbord']);
Route::get('/ajout_page/{pageID}', [DashbordController::class,'ajout_page'])->name('ajout_page');
Route::get('/ajout_slide/{slideID}', [Store_slideController::class,'ajout_slide'])->name('ajout_slide');
Route::get('/ajout_service/{serviceID}', [Store_serviceController::class,'ajout_service'])->name('ajout_service');
Route::get('/liste_slide', [Store_slideController::class,'liste_slide'])->name('liste_slide');
Route::get('/liste_service', [Store_serviceController::class,'liste_service'])->name('liste_service');
Route::get('/ajout_produit/{produitID}', [DashbordController::class,'ajout_produit'])->name('ajout_produit');
Route::get('/liste_page', [DashbordController::class,'liste_page'])->name('liste_page');
Route::get('/liste_produit', [DashbordController::class,'liste_produit'])->name('liste_produit');
Route::post('/stores', [StoresController::class,'store'])->name('stores');
Route::post('/store', [StoreController::class,'ajout_page'])->name('store');
Route::post('/store_slide', [Store_slideController::class,'ajout_slides'])->name('store_slide');
Route::post('/store_service', [Store_serviceController::class,'ajout_services'])->name('store_service');
Route::post('/store_produit', [Store_produitController::class,'ajout_produit'])->name('store_produit');
Route::post('/store_ajout_produit_categorie', [Store_ajout_produit_categorie::class,'ajout_categorie_produit'])->name('store_ajout_produit_categorie');
Route::post('/store_appreciation', [Store_appreciation::class,'ajout_appreciation'])->name('store_appreciation');
Route::get('supprimer_page', [StoreController::class,'supprime_page'])->name('supprime_page');
Route::get('supprimer_categorie_page', [StoreController::class,'supprimer_categorie_page'])->name('supprimer_categorie_page');
Route::get('supprimer_categorie_produit', [Store_produitController::class,'supprimer_categorie_produit'])->name('supprimer_categorie_produit');
Route::get('supprimer_produit', [Store_produitController::class,'supprime_produit'])->name('supprime_produit');
Route::get('supprimer_appreciation_produit', [Store_produitController::class,'supprimer_appreciation_produit'])->name('supprimer_appreciation_produit');
Route::get('supprimer_slide', [Store_slideController::class,'supprimer_slide'])->name('supprimer_slide');
Route::get('supprimer_service', [Store_serviceController::class,'supprimer_service'])->name('supprimer_service');
