<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

     /**
     * Get the students for the teacher.
     */
    public function students()
    {
        return $this->hasMany(Student::class, 'class_teacher_id');
    }
}
