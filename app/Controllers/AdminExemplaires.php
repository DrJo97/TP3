<?php

namespace App\Controllers;

use App\Models\ExemplaireModel;

class AdminExemplaires extends BaseController
{
    public function index()
    {
        $model = new ExemplaireModel();
        $exemplaires = $model->findAll();

        return view('admin_exemplaires', ['exemplaires' => $exemplaires]);
    }
}
