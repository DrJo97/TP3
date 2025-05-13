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
        
            if ($login === APP_ADMIN_LOGIN && $password === APP_ADMIN_PASSWORD) {
                session()->set('is_admin', true);
                return redirect()->to('/admin'); // ✅ Redirection vers ton interface visuelle
            }
        
            $usermodel = new \App\Models\UserModel();
            $userfetched = $usermodel->where('matricule_abonne', $login)->first();
        
            if ($userfetched && $password === $userfetched['nom_abonne']) {
                return redirect()->to('/home');
            }
        
            return "login ko";
        }
    }