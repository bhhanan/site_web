<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nonEnregistrer extends Model
{
    use HasFactory;
    protected $fillable = [
        'anner',
        'numéro',
        'Nom',
        'Prénom',
        'dateNaissance',
        'gender',
    
    ];
}
