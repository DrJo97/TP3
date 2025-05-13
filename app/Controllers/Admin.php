<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard(): string
    {
        if (!session()->get('is_admin')) {
            return redirect()->to('/login'); // redirige si pas admin
        }

        return view('/admin'); // affiche la page admin si connecté
    }
}
