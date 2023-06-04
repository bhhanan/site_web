<?php
use App\Http\Controllers\NaissanceController;
use App\Http\Controllers\DéciderController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\NonEnregisrerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| 
*/

Route::get('/',[RegisterController::class,'create']);

Route::post('/register',[RegisterController::class,'store'])->name('register');

Route::get('/declaration/naissance',[NaissanceController::class,'index']);
Route::get('/impression/naissance',[NaissanceController::class,'impression'])->name('impression.naissance');
Route::post('/login/naissance',[NaissanceController::class,'store'])->name('store.naissance');
Route::get('/Supprimer-naissance/{id}',[NaissanceController::class,'destroy'])->name('delete-naissance');
Route::get('/Modifier-naissance/{id}',[NaissanceController::class,'edit'])->name('modifier-naissance');
Route::post('/modifier/naissance/{id}',[NaissanceController::class,'update'])->name('update.naissance');




Route::get('/declaration/décider',[DéciderController::class,'index']);
Route::get('/impression/décider',[DéciderController::class,'impression'])->name('impression.décider');
Route::post('/Edit/décider',[DéciderController::class,'store'])->name('store.décider');
Route::get('/Supprimer-décider/{id}',[DéciderController::class,'destroy'])->name('delete-décider');
Route::get('/Modifier-décider/{id}',[DéciderController::class,'edit'])->name('modifier-décider');
Route::post('/modifier/décider/{id}',[DéciderController::class,'update'])->name('update.décider');





Route::get('/accuiel/Accuiel',[AcceuilController::class,'index']);
Route::get('/bureau/Accuiel',[AcceuilController::class,'bureau']);
Route::get('/officier/Accuiel',[AcceuilController::class,'officier']);
Route::get('/procédure/Accuiel',[AcceuilController::class,'procédure']);
Route::get('/registre/Accuiel',[AcceuilController::class,'registre']);
Route::get('/accuiel/Guide',[AcceuilController::class,'Guide']);
Route::get('/service/Accuiel',[AcceuilController::class,'service']);
Route::get('/étranger/Accuiel',[AcceuilController::class,'étranger']);
Route::get('/infos/Accuiel',[AcceuilController::class,'infos']);

Route::get('déclaration/NonE',[NonEnregisrerController::class,'index']);
Route::get('/impression/enregistrer',[DéciderController::class,'impression'])->name('impression.nonenregistrer');
Route::post('/Edit/enregistrer',[DéciderController::class,'store'])->name('store.nonenregistrer');
