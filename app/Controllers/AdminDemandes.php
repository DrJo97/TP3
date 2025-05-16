<?php

namespace App\Controllers;

use App\Models\DemandeEmpruntModel;
use App\Models\EmpruntModel;
use CodeIgniter\Controller;

class AdminDemandes extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        $demandes = $db->query("
            SELECT d.*, a.nom_abonne, l.titre_livre
            FROM demande_emprunt d
            JOIN abonne a ON a.matricule_abonne = d.matricule_abonne
            JOIN exemplaire e ON e.cote_exemplaire = d.cote_exemplaire
            JOIN livre l ON l.code_catalogue = e.code_catalogue
            WHERE d.statut = 'en_attente'
        ")->getResultArray();

        return view('admin_demandes', ['demandes' => $demandes]);
    }

    public function valider($id)
    {
        $demandeModel = new DemandeEmpruntModel();
        $empruntModel = new EmpruntModel();

        $demande = $demandeModel->find($id);

        if (!$demande) {
            return redirect()->back()->with('error', 'Demande introuvable.');
        }

        // Enregistrer l'emprunt
        $empruntModel->insert([
            'matricule_abonne' => $demande['matricule_abonne'],
            'cote_exemplaire'  => $demande['cote_exemplaire'],
            'date_emprunt'     => date('Y-m-d'),
        ]);

        // Supprimer la demande
        $demandeModel->delete($id);

        return redirect()->to('/admindemandes')->with('message', '✅ Emprunt validé.');
    }

    public function supprimer($id)
    {
        $demandeModel = new DemandeEmpruntModel();
        $demandeModel->delete($id);

        return redirect()->to('/admindemandes')->with('message', '❌ Demande supprimée.');
    }
}
