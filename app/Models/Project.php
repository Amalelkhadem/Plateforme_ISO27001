<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UncheckedCategory;
use App\Models\User;


class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_project',
        'name_organisation',
        'name_model',
        'conformity_percentage',
        'categories_decochees',
        'user_id',
    ];

    public function uncheckedCategories()
    {
        return $this->hasMany(UncheckedCategory::class);
    }
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
    public function user()
{
    return $this->belongsTo(User::class);
}

    public function userSessions()
{
    return $this->hasMany(UserSession::class);
}
    public function archives()
{
    return $this->hasMany(Archive::class);
}
 public function users()
    {
        return $this->belongsToMany(User::class, 'sessions', 'project_id', 'user_id');
    }
      public function historiques()
    {
        return $this->hasMany(Historique::class);
    }
}