<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyTopic extends Model
{
    protected $fillable = [
        'subject',
        'topic',
        'study_date',
        'priority',
        'completed',
    ];

    protected $casts = [
        'study_date' => 'date',
        'completed' => 'boolean',
    ];
}