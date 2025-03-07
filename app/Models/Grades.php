<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    protected $table = 'grades';

    protected $fillable = [
        'student_id',
        'subject_id',
        'teacher_id',
        'grade',
        'date'
    ];

    public function students()
    {
        return $this->belongsTo(Students::class);
    }

    public function subjects()
    {
        return $this->belongsTo(Subjects::class);
    }

    public function teachers()
    {
        return $this->belongsTo(Teachers::class);
    }
}