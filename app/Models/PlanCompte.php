<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanCompte extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_compte',
        'intitule_compte',
        'type_compte'
    ];
}
