<?php

namespace App\Controllers;

use App\Models\LivreModel;

class AdminLivresAdd extends BaseController
{
    public function index()
    {
        return view('admin_livre_add'); // formulaire HTML
    }

    public function create()
    {
        $model = new LivreModel();

        $data = [
            'code_catalogue' => $this->request->getPost('code_catalogue'),
            'titre_livre'    => $this->request->getPost('titre_livre'),
            'theme_livre'    => $this->request->getPost('theme_livre'),
            'etat_livre'     => $this->request->getPost('etat_livre'),
        ];

        $model->insert($data);

        return redirect()->to('/adminlivres')->with('message', '📘 Livre ajouté');
    }
}
