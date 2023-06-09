<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pipeline extends Model
{
    use HasFactory;

    protected $table = 'pipeline';

    protected $fillable = [
        'id',
        'pipeline_id',
        'name',
        'stages'
    ];
}
