<?php

namespace App\Controllers;

use App\Models\UserModel;

class AbonneInfos extends BaseController
{
    public function index()
    {
        // Simuler un identifiant d’abonné (en vrai, tu devrais le prendre depuis la session connectée)
        $matricule = session()->get('matricule_abonne');

        if (!$matricule) {
            return redirect()->to('/login'); // ou une page d'erreur
        }

        $model = new UserModel();
        $abonne = $model->find($matricule);

        if (! $abonne) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Abonné non trouvé');
        }

        return view('abonne_infos', ['abonne' => $abonne]);
    }
}
