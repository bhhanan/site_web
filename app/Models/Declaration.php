<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Declaration extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function impressions(){
        return $this->hasMany(Impression::class);
    }
}
