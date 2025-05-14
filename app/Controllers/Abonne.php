<?php

namespace App\Controllers;

class Abonne extends BaseController
{
  public function index()
{
    if (!session()->get('abonne')) {
        return redirect()->to('/abonne');
    }

    return view('abonne'); // ← appelle app/Views/abonne.php
}

}