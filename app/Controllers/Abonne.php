<?php

namespace App\Controllers;

use App\Models\LivreModel;
use App\Models\UserModel;

class Abonne extends BaseController
{
    public function index()
    {
        // Vérifie que l'abonné est connecté
        if (!session()->has('matricule_abonne')) {
            return redirect()->to('/login');
        }

        // Chargement des livres (visible à tous les abonnés)
        $livreModel = new LivreModel();
        $livres = $livreModel->findAll();

        return view('abonne', ['livres' => $livres]);
    }

    public function infos()
    {
        if (!session()->has('matricule_abonne')) {
            return redirect()->to('/login');
        }

        $model = new UserModel();
        $abonne = $model->find(session()->get('matricule_abonne'));

        return view('abonne_infos', ['abonne' => $abonne]);
    }

    public function logout()
    {
        session()->remove('matricule_abonne');
        return redirect()->to('/login');
    }
}
