<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('welcome');
});

Auth::routes();

Route::post('/telecharge', 'App\Http\Controllers\etudiantController@telecharger');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/interfaceEtudiant', function(){
    return view('interfaceEtudiant');
})->name('interfaceEtudiant');

Route::get('/interfaceEntreprise', function(){
    return view('interfaceEntreprise');
})->name('interfaceEntreprise');

Route::get('/interfaceTuteur', function(){
    return view('interfaceTuteur');
})->name('interfaceTuteur');

Route::get('/interfaceJury', function(){
    return view('interfaceJury');
})->name('interfaceJury');

Route::get('/interfaceAdmin', function(){
    return view('interfaceAdmin');
})->name('interfaceAdmin');

//entreprise

Route::get('/ajoutEntreprise', function(){
    return view('entreprise.ajout');
});
Route::post('/ajoutEntreprise', function () {
    $entreprise = new App\Models\Entreprises();
    $entreprise->raison_soc = request('raison_soc');
    $entreprise->numTel = request('numTel');
    $entreprise->numRue = request('numRue');
    $entreprise->nomRue = request('nomRue');
    $entreprise->ville = request('ville');
    $entreprise->codePostal = request('codePostal');
    $entreprise->user_id = auth()->user()->id;
    $entreprise->save();
    return redirect('/liste');   
});

Route::get('/liste','App\Http\Controllers\entrepriseController@listeEntreprise');

Route::get('/liste/detail/{id}', 'App\Http\Controllers\entrepriseController@details');

Route::get('/liste/edit/{id}', 'App\Http\Controllers\entrepriseController@modif');

Route::post('/liste/update/{id}', 'App\Http\Controllers\entrepriseController@update');

Route::get('/liste/destroy/{id}','App\Http\Controllers\entrepriseController@destroy');

//tuteur

Route::get('/tuteur', function(){
    return view('tuteur/inscription');
});
Route::post('/tuteur', 'App\Http\Controllers\tuteurController@createTuteur');

Route::get('/listeTuteur','App\Http\Controllers\tuteurController@listeTuteur');

Route::get('/listeTuteur/detailTuteur/{id}', 'App\Http\Controllers\tuteurController@detailsTuteur');

Route::get('/listeTuteur/editTuteur/{id}', 'App\Http\Controllers\tuteurController@modifTuteur');

Route::post('/listeTuteur/updateTuteur/{id}', 'App\Http\Controllers\tuteurController@updateTuteur');

Route::get('/listeTuteur/destroyTuteur/{id}','App\Http\Controllers\tuteurController@destroyTuteur');

//jury

Route::get('/jury', function(){
    return view('jury/inscription');
});
Route::post('/jury', 'App\Http\Controllers\juryController@createJury');

Route::get('/listeJury','App\Http\Controllers\juryController@listeJury');

Route::get('/listeJury/detailJury/{id}', 'App\Http\Controllers\juryController@detailsJury');

Route::get('/listeJury/editJury/{id}', 'App\Http\Controllers\juryController@modifJury');

Route::post('/listeJury/updateJury/{id}', 'App\Http\Controllers\juryController@updateJury');

Route::get('/listeJury/destroyJury/{id}','App\Http\Controllers\juryController@destroyJury');


//etudiants
Route::get('/etudiant', function(){
    return view('etudiant/inscription');
});

//Route::get('/depot/stage={stage}', function(){

   // return view('etudiant/depotcandidature');
//});

Route::get('/mesOffres/{id}', 'App\Http\Controllers\etudiantController@mesOffres');

Route::get('/depot/stage/{id}', 'App\Http\Controllers\etudiantController@load');

Route::post('/depot/postuler', 'App\Http\Controllers\etudiantController@postuler');

Route::post('/etudiant', 'App\Http\Controllers\etudiantController@createEtudiant');

Route::get('/listeEtudiant', 'App\Http\Controllers\etudiantController@listeEtudiant');
Route::get('/interfaceEtudiant', 'App\Http\Controllers\etudiantController@afficheOffre');

Route::get('/listeEtudiant/detailEtudiant/{id}', 'App\Http\Controllers\etudiantController@detailsEtudiant');

Route::get('/listeEtudiant/editEtudiant/{id}', 'App\Http\Controllers\etudiantController@modifEtudiant');

Route::post('/listeEtudiant/updateEtudiant/{id}', 'App\Http\Controllers\etudiantController@updateEtudiant');

Route::get('/listeEtudiant/destroyEtudiant/{id}','App\Http\Controllers\etudiantController@destroyEtudiant');



//Auth::routes(['verify' => true]);


//stage
Route::get('/stage', function(){
    return view('Stage/offre_de_stage');
});

Route::post('/stage', 'App\Http\Controllers\offre_de_stageController@create');

Route::get('/listeStage','App\Http\Controllers\offre_de_stageController@listeStage');
Route::get('/postuler','App\Http\Controllers\offre_de_stageController@postulerOffre');

Route::get('/listeStage/detailStage/{id}', 'App\Http\Controllers\offre_de_stageController@detailsStage');

Route::get('/stage/detail/{id}', 'App\Http\Controllers\offre_de_stageController@detailsStage1');

Route::get('/listeStage/editStage/{id}', 'App\Http\Controllers\offre_de_stageController@modifStage');

Route::post('/listeStage/updateStage/{id}', 'App\Http\Controllers\offre_de_stageController@updateStage');

Route::get('/listeStage/destroyStage/{id}','App\Http\Controllers\offre_de_stageController@destroyStage');

Route::get('/rechercheStage','App\Http\Controllers\offre_de_stageController@recherche');