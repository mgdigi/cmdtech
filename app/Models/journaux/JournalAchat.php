<?php

namespace App\Models\journaux;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AnneeFiscale;
use App\Models\PlanCompte;

class JournalAchat extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'numero_compte',
        'libelle',
        'debit',
        'credit',
        'annee_fiscale_id',
    ];

    // Relation avec PlanCompte
    public function planCompte()
    {
        return $this->belongsTo(PlanCompte::class, 'numero_compte');
    }

    // Relation avec AnneeFiscale
    public function anneeFiscale()
    {
        return $this->belongsTo(AnneeFiscale::class, 'annee_fiscale_id');
    }
}
