<?php

namespace App\Controllers;

use App\Models\UserModel;

class AdminAbonneEdit extends BaseController
{
    public function edit($matricule)
    {
        $model = new UserModel();
        $abonne = $model->find($matricule);

        if (! $abonne) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Abonné introuvable');
        }

        return view('admin_abonne_edit', ['abonne' => $abonne]);
    }

    public function update($matricule)
    {
        $model = new UserModel();

        $data = [
            'nom_abonne'             => $this->request->getPost('nom_abonne'),
            'date_naissance_abonne' => $this->request->getPost('date_naissance_abonne'),
            'date_adhesion_abonne'  => $this->request->getPost('date_adhesion_abonne'),
            'adresse_abonne'        => $this->request->getPost('adresse_abonne'),
            'telephone_abonne'      => $this->request->getPost('telephone_abonne'),
            'CSP_abonne'            => $this->request->getPost('CSP_abonne'),
        ];

        $model->update($matricule, $data);

        return redirect()->to('/adminabonnes')->with('message', 'Abonné mis à jour');
    }

    public function delete($matricule)
    {
        $model = new UserModel();
        $model->delete($matricule);

        return redirect()->to('/adminabonnes')->with('message', '🗑 Abonné supprimé');
    }
}
