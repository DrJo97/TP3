<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AdminAbonneAdd extends BaseController
{
    public function index()
    {
        return view('admin_abonne_add'); // ta vue avec le formulaire
    }

    public function create()
    {
        $userModel = new UserModel();

        $data = [
            'matricule_abonne'        => $this->request->getPost('matricule_abonne'),
            'nom_abonne'              => $this->request->getPost('nom_abonne'),
            'date_naissance_abonne'   => $this->request->getPost('date_naissance_abonne'),
            'date_adhesion_abonne'    => $this->request->getPost('date_adhesion_abonne'),
            'adresse_abonne'          => $this->request->getPost('adresse_abonne'),
            'telephone_abonne'        => $this->request->getPost('telephone_abonne'),
            'CSP_abonne'              => $this->request->getPost('CSP_abonne'),
        ];

        $userModel->insert($data);

        return redirect()->to('/adminabonnes')->with('message', 'Abonné ajouté avec succès');
    }
}
