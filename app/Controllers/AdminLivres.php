<?php

namespace App\Controllers;

use App\Models\LivreModel;

class AdminLivres extends BaseController
{
    public function index()
    {
        $model = new LivreModel();
        $livres = $model->findAll();

        return view('admin_livres', ['livres' => $livres]);
    }
}
