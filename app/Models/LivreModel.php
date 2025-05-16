<?php

namespace App\Models;

use CodeIgniter\Model;

class LivreModel extends Model
{
    protected $table = 'livre'; // Assure-toi que le nom correspond à ta table
    protected $primaryKey = 'code_catalogue';
    protected $returnType = 'array';

    protected $allowedFields = [
        'code_catalogue',
        'titre_livre',
        'theme_livre',
        'etat_livre',
    ];
}
