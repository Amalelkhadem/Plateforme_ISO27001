<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UncheckedCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'category_label',
        'phrase_evalue', 
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}