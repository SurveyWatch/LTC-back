<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastname',
        'firstname',
        'birthdate',
        'familial_situation',
        'social_situation',
        'fk_users_profils',
    ];

    protected $casts = [
        'birthdate' => 'date',
    ];
}
