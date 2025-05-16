<?php

namespace App\Controllers;

use App\Models\ExemplaireModel;

class AdminExemplaireAdd extends BaseController
{
    public function index()
    {
        return view('admin_exemplaire_add');
    }

    public function create()
    {
        $model = new ExemplaireModel();

        $data = [
            'nom_editeur'        => $this->request->getPost('nom_editeur'),
            'code_usure'         => $this->request->getPost('code_usure'),
            'date_acquisition'   => $this->request->getPost('date_acquisition'),
            'emplacement_rayon'  => $this->request->getPost('emplacement_rayon'),
            'code_catalogue'     => $this->request->getPost('code_catalogue'),
        ];

        $model->insert($data);

        return redirect()->to('/adminexemplaires')->with('message', 'Exemplaire ajouté avec succès');
    }
}
