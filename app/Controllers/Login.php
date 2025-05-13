<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function attemptLogin()
    {
        // Récupération des données du formulaire
        $login = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Vérifie si c'est l'admin (via constantes)
        if ($login === APP_ADMIN_LOGIN && $password === APP_ADMIN_PASSWORD) {
            return redirect()->to('/admin'); // ou autre page admin
        }

        // Sinon, vérifie si c’est un abonné
        $usermodel = new UserModel();
        $userfetched = $usermodel->where('matricule_abonne', $login)->first();

        if ($userfetched && $password === $userfetched['nom_abonne']) {
            return redirect()->to('/home'); // ou page utilisateur
        } else {
            return "login ko";
        }
    }
}
