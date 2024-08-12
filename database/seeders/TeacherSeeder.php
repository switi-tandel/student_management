<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = [
            ['teacher_name' => 'John Smith', 'subject' => 'Math'],
            ['teacher_name' => 'Jane Doe', 'subject' => 'Science'],
            ['teacher_name' => 'Michael Brown', 'subject' => 'History'],
            ['teacher_name' => 'Lisa White', 'subject' => 'Geography'],
            ['teacher_name' => 'Paul Black', 'subject' => 'English'],
            ['teacher_name' => 'Emily Green', 'subject' => 'Physics'],
            ['teacher_name' => 'David Blue', 'subject' => 'Chemistry'],
            ['teacher_name' => 'Sophia Gray', 'subject' => 'Biology'],
            ['teacher_name' => 'James Yellow', 'subject' => 'Physical Education'],
            ['teacher_name' => 'Anna Pink', 'subject' => 'Art'],
        ];

        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }
    }
}
