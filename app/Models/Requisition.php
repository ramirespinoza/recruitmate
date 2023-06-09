<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    use HasFactory;

    protected $table = 'requisition';

    protected $fillable = [
        'id',
        'company_id',
        'name',
        'requisitions'
    ];
}
