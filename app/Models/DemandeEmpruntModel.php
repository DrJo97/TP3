<?php

namespace App\Models;

use CodeIgniter\Model;

class DemandeEmpruntModel extends Model
{
    protected $table = 'demande_emprunt';
    protected $primaryKey = 'id'; // ou autre si ta clé diffère
    protected $allowedFields = ['matricule_abonne', 'cote_exemplaire', 'date_demande', 'statut'];
    public $useTimestamps = false;
}
