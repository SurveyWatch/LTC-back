<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sondage extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_survey',
        'question_survey',
        'description',
    ];
}
