<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PipelineApplicant extends Model
{
    use HasFactory;

    protected $table = 'pipeline_applicant';

    protected $fillable = [
        'id',
        'pipeline_id',
        'applicant_id',
        'values',

    ];
}
