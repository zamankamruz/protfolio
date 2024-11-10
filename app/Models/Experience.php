<?php

// Experience.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'title', 'company', 'start_date', 'end_date', 'years_experience', 'description'
    ];

    // Cast start_date and end_date as dates
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}

