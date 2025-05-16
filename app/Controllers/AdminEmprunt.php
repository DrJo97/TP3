<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\EmpruntModel;

class AdminEmprunt extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        // Liste des abonnés
        $userModel = new UserModel();
        $abonnes = $userModel->findAll();

        // Exemplaires disponibles (non empruntés actuellement)
        $exemplaires = $db->query("
            SELECT e.*
            FROM exemplaire e
            LEFT JOIN emprunte em ON em.cote_exemplaire = e.cote_exemplaire AND em.date_retour IS NULL
            WHERE em.cote_exemplaire IS NULL
        ")->getResultArray();

        // Emprunts actifs
        $emprunts = $db->query("
            SELECT em.matricule_abonne, em.cote_exemplaire, em.date_emprunt,
                   abonne.nom_abonne, livre.code_catalogue, livre.titre_livre
            FROM emprunte em
            JOIN abonne ON abonne.matricule_abonne = em.matricule_abonne
            JOIN exemplaire ON exemplaire.cote_exemplaire = em.cote_exemplaire
            JOIN livre ON livre.code_catalogue = exemplaire.code_catalogue
            WHERE em.date_retour IS NULL
        ")->getResultArray();

        return view('admin_emprunt', [
            'abonnes' => $abonnes,
            'exemplaires' => $exemplaires,
            'emprunts' => $emprunts,
        ]);
    }

    public function enregistrer()
    {
        $model = new EmpruntModel();

        $data = [
            'matricule_abonne' => $this->request->getPost('matricule_abonne'),
            'cote_exemplaire'  => $this->request->getPost('cote_exemplaire'),
            'date_emprunt'     => date('Y-m-d'),
        ];

        $model->insert($data);

        return redirect()->to('/adminemprunt')->with('message', 'Emprunt enregistré');
    }

    public function supprimer()
    {
        $matricule = $this->request->getGet('matricule_abonne');
        $cote = $this->request->getGet('cote_exemplaire');
        $date = $this->request->getGet('date_emprunt');

        $db = \Config\Database::connect();

        $db->table('emprunte')
            ->where([
                'matricule_abonne' => $matricule,
                'cote_exemplaire' => $cote,
                'date_emprunt' => $date
            ])
            ->delete();

        return redirect()->to('/adminemprunt')->with('message', 'Emprunt supprimé');
    }
}
