<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant'])->name('etudiant');
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant'])->name('ajouter');
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement'])->name('ajouter.traitement');

Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant'])->name('update');
Route::post('/update/traitement/{id}', [EtudiantController::class, 'update_etudiant_traitement'])->name('update.traitement');
Route::get('/delete/{id}', [EtudiantController::class, 'delete_etudiant'])->name('delete');
Route::get('/', function () {
    return redirect('/etudiant');
});
Route::get('/debug', function() {
    dd([
        'HTTP_HOST' => $_SERVER['HTTP_HOST'],
        'SERVER_NAME' => $_SERVER['SERVER_NAME'],
        'SERVER_PORT' => $_SERVER['SERVER_PORT'],
        'APP_URL' => env('APP_URL'),
        'config.app.url' => config('app.url'),
        'request->root()' => request()->root(),
        'request->url()' => request()->url(),
    ]);
});