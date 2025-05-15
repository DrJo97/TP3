<?php

namespace App\Controllers;

use App\Models\UserModel;

class AdminAbonnes extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $abonnes = $userModel->findAll();

        return view('admin_abonnes', ['abonnes' => $abonnes]);
    }

    public function ajouter()
    {
        return view('ajouter_abonne');
    }

    public function enregistrer()
    {
        $userModel = new UserModel();

        $userModel->insert([
            'matricule_abonne'       => $this->request->getPost('matricule'),
            'nom_abonne'             => $this->request->getPost('nom'),
            'date_naissance_abonne' => $this->request->getPost('date_naissance'),
            'date_adhesion_abonne'  => $this->request->getPost('date_adhesion'),
            'adresse_abonne'        => $this->request->getPost('adresse'),
            'telephone_abonne'      => $this->request->getPost('telephone'),
            'CSP_abonne'            => $this->request->getPost('csp'),
        ]);

        return redirect()->to('/adminabonnes');
    }
}
