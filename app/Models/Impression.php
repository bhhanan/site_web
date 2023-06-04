<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Impression extends Model
{
    use HasFactory;

    protected $fillable = [
        'anner',
        'numéro',
        'Nom',
        'lieuDécider',
        'dateDécider',
        'candidat_id'
    ];
   /* public function declarations()
    {
        return $this->belongsTo(Declaration::class);
    }*/
}
