<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    
    public function user()
        {
            return $this->belongsToMany(User::class, 'teams_users', 'user_id', 'team_id');     
        }
    }
