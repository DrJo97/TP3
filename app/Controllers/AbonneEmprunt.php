<?php

namespace App\Controllers;

use App\Models\DemandeEmpruntModel;

class AbonneEmprunt extends BaseController
{
    public function index()
    {
        $session = session();
        $matricule = $session->get('abonne')['matricule_abonne'];

        $db = \Config\Database::connect();

        // Emprunts en cours
        $emprunts = $db->query("
            SELECT em.*, livre.titre_livre, livre.code_catalogue, exemplaire.cote_exemplaire
            FROM emprunte em
            JOIN exemplaire ON exemplaire.cote_exemplaire = em.cote_exemplaire
            JOIN livre ON livre.code_catalogue = exemplaire.code_catalogue
            WHERE em.matricule_abonne = ? AND em.date_retour IS NULL
        ", [$matricule])->getResultArray();

        // Exemplaires disponibles pour demande
        $exemplaires = $db->query("
            SELECT e.*, l.titre_livre, l.code_catalogue
            FROM exemplaire e
            JOIN livre l ON l.code_catalogue = e.code_catalogue
            WHERE NOT EXISTS (
                SELECT 1 FROM emprunte em
                WHERE em.cote_exemplaire = e.cote_exemplaire AND em.date_retour IS NULL
            )
        ")->getResultArray();

        return view('abonne_emprunts', [
            'emprunts' => $emprunts,
            'exemplaires' => $exemplaires
        ]);
    }

    public function demander()
    {
        $matricule = session()->get('abonne')['matricule_abonne'];
        $cote = $this->request->getPost('cote_exemplaire');

        // Vérifier si une demande similaire existe déjà
        $db = \Config\Database::connect();
        $exist = $db->query("
            SELECT * FROM demande_emprunt
            WHERE matricule_abonne = ? AND cote_exemplaire = ? AND statut = 'en_attente'
        ", [$matricule, $cote])->getResult();

        if (count($exist) > 0) {
            return redirect()->back()->with('error', 'Demande déjà en attente pour cet exemplaire.');
        }

        // Insérer la demande
        $model = new DemandeEmpruntModel();
        $model->insert([
            'matricule_abonne' => $matricule,
            'cote_exemplaire' => $cote,
            'date_demande' => date('Y-m-d'),
            'statut' => 'en_attente'
        ]);

        return redirect()->to('/abonne/emprunts')->with('message', 'Demande d\'emprunt enregistrée.');
    }
}
