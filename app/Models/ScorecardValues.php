<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScorecardValues extends Model
{
    use HasFactory;

    protected $table = 'scorecard_values';

    protected $fillable = [
        'id',
        'scorecard_id',
        'applicant_id',
        'values'
    ];
}
