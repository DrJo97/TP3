<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table           = 'abonne';
    protected $primaryKey      = 'matricule_abonne';

    protected $useAutoIncrement = true;

    protected $returnType       = 'array' ;

    protected $allowedFileds = [
        'matricule_abonne',
        'nom_abonne',
        'date_naissance_abonne',
        'adresse_abonne',
        'telephone_abonne',
        'CSP_abonne'
    ];
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true ;
}