<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    protected $fillable = [
        'project_id',
        'nom_projet',
        'pourcentage_conformite',
        'nom_auditeur_emetteur',
        'nom_auditeur_recepteur',
        'date_transfert',
    ];

 public function project()
    {
        return $this->belongsTo(Project::class);
    }
}