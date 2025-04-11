<?php

namespace App\Controllers;
class Login extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
    public function attemptlogin()
    {
        $usermodel = new \App\Models\UserModel();

        $userfetched = $usermodel ->where('matricule_abonne', $this->request-> getPost('username'))->first();
        
        if($this ->request ->getPost('password') == $userfetched['nom_abonne']){

            return "login ok";

        } else {
            return "login ko";
        }

    

    }
}
