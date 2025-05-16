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
        $login = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Connexion admin
        if ($login === APP_ADMIN_LOGIN && $password === APP_ADMIN_PASSWORD) {
            session()->set('is_admin', true);
            return redirect()->to('/admin');
        }

        // Connexion abonné
        $userModel = new UserModel();
        $user = $userModel->where('matricule_abonne', $login)->first();

        if ($user && $password === $user['nom_abonne']) {
            session()->set('matricule_abonne', $user['matricule_abonne']);
            return redirect()->to('/abonne');
        }

        // Échec de connexion
        return "Login échoué. Vérifiez vos identifiants.";
    }
}
