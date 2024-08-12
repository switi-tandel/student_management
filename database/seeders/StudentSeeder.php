<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as Faker;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 50; $i++) {
            Student::create([
                'student_name' => $faker->name, // Generate a unique name for each student
                'email' => $faker->unique()->safeEmail(),
                'class_teacher_id' => rand(1, 10), // Randomly assign one of the 10 teachers
                'class' => $faker->randomElement(['A', 'B', 'C', 'D']),
                'admission_date' => $faker->date(), // Random admission date
                'yearly_fees' => $faker->numberBetween(1000, 5000), // Random fees between 1000 and 5000
            ]);
        }
    }
}
