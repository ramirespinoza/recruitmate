<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTeam extends Model
{
    use HasFactory;

    protected $table = 'user_team';

    protected $fillable = [
        'id',
        'user_id',
        'team_id'
    ];
}
