<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant'])->name('etudiant');
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant'])->name('ajouter');
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement'])->name('ajouter.traitement');

Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant'])->name('update');
Route::post('/update/traitement/{id}', [EtudiantController::class, 'update_etudiant_traitement'])->name('update.traitement');
Route::get('/', function () {
    return redirect()->route('etudiant');
});