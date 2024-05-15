<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
     use HasFactory;

    protected $fillable = [
        'project_id',
        'category_label',
        'phrase_evalue',
        'avancement' 
    ];

    // Relation avec le modèle Project
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}