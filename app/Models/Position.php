<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = 'position';

    protected $fillable = [
        'id',
        'name',
        'description',
        'company_id',
        'team_id',
        'type',
        'location',
        'department',
        'requisition_id',
        'category',
        'experience',
        'education',
        'custom_attributes',
        'scorecard_id',
        'pipeline_id',
        'questionnaire_id'
    ];
}
