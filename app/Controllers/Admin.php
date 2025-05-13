<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function contact(): string
    {
        if (!session()->get('is_admin')) {
            return redirect()->to('/admin-login'); // redirige si pas admin
        }

        return view('admin'); // affiche la page admin si connecté
    }
}
