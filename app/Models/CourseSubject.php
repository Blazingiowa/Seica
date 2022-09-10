<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSubject extends Model
{
    use HasFactory;

    protected $table="course_subjects";
    protected $guarded=[
        "created_at",
        "updated_at",
        'id'
    ];
}
