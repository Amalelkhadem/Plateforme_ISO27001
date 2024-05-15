<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UncheckedCategory;


class Archive extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name_project',
        'name_organisation',
        'name_model',
        'conformity_percentage',
        'categories_decochees',
    ];

    public function uncheckedCategories()
    {
        return $this->hasMany(UncheckedCategory::class);
    }
     public function userSessions()
{
    return $this->hasMany(UserSession::class);
}
 public function project()
    {
        return $this->belongsTo(Project::class);
    }
}