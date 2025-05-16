<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class AbonneExemplaire extends BaseController
{
    public function index()
    {
        $db = Database::connect();

        // On récupère tous les exemplaires ayant un `cote_exemplaire` > 0 et liés à un livre
        $exemplaires = $db->table('exemplaire')
            ->select('exemplaire.*, livre.titre_livre')
            ->join('livre', 'livre.code_catalogue = exemplaire.code_catalogue')
            ->where('cote_exemplaire >', 0)
            ->get()
            ->getResultArray();

        return view('abonne_exemplaires', ['exemplaires' => $exemplaires]);
    }
}
