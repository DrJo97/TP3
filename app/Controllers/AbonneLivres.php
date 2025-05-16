<?php

namespace App\Controllers;

use App\Models\LivreModel;

class AbonneLivres extends BaseController
{
    public function index()
    {
        $model = new LivreModel();
        $livres = $model->findAll();

        return view('abonne_livres', ['livres' => $livres]);
    }
}
