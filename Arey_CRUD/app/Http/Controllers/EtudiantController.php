<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant() {
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }

    public function ajouter_etudiant() {
        return view('etudiant.ajouter');
    }

    public function ajouter_etudiant_traitement(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);

        Etudiant::create($request->all());

        return redirect()->route('etudiant')->with('success','Etudiant ajouté avec succès !');
    }

    public function update_etudiant($id) {
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiant.update', compact('etudiant'));
    }

    public function update_etudiant_traitement(Request $request, $id) {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);

        $etudiant = Etudiant::findOrFail($id);
        $etudiant->update($request->all());

        return redirect()->route('etudiant')->with('success','Etudiant modifié avec succès !');
    }
    public function delete_etudiant($id) {
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->delete();

        return redirect()->route('etudiant')->with('success','Etudiant supprimé avec succès !');
    }
}