<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $table = 'applicant';

    protected $fillable = [
        'id',
        'position_id',
        'name',
        'email_address',
        'phone_number',
        'address',
        'summary',
        'tags',
        'source',
        'work_historty',
        'education',
        'curriculum_url'

    ];
}
