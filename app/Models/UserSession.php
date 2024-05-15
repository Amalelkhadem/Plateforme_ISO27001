<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserSession extends Model
{
        use HasFactory;

    protected $table = 'sessions';

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
    public function archives()
{
    return $this->hasMany(Archive::class);
}

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}