<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpruntModel extends Model
{
    protected $table = 'emprunte'; // ✅ Nom corrigé
    protected $primaryKey = 'id_emprunt';

    protected $allowedFields = [
        'matricule_abonne',
        'cote_exemplaire',
        'date_emprunt',
        'date_retour',
        'estRenouvele',
    ];

    protected $returnType = 'array';
}
