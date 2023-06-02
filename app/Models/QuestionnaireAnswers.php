<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionnaireAnswers extends Model
{
    use HasFactory;

    protected $table = 'cuestionnaire_answers';

    protected $fillable = [
        'id',
        'questionnaire_id',
        'applicant_id',
        'answers'
    ];
}
