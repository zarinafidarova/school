<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';

    protected $fillable = [
        'subject_id',
        'teacher_id',
        'class_id',
        'day_of_week',
        'start_time',
        'end_time'
    ];

    public function subjects()
    {
        return $this->belongsTo(Subjects::class);
    }

    public function teachers()
    {
        return $this->belongsTo(Teachers::class);
    }

    public function classes()
    {
        return $this->belongsTo(Classess::class);
    }
}