<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scorecard extends Model
{
    use HasFactory;

    protected $table = 'scorecard';

    protected $fillable = [
        'id',
        'company_id',
        'name',
        'items'
    ];
}
