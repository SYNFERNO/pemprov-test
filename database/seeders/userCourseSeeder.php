<?php

namespace Database\Seeders;

use App\Models\userCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        userCourse::create([
            'id_user' => 1,
            'id_course' => 1,
        ]);
        userCourse::create([
            'id_user' => 1,
            'id_course' => 2,
        ]);
        userCourse::create([
            'id_user' => 1,
            'id_course' => 3,
        ]);

        userCourse::create([
            'id_user' => 2,
            'id_course' => 4,
        ]);
        userCourse::create([
            'id_user' => 2,
            'id_course' => 5,
        ]);
        userCourse::create([
            'id_user' => 2,
            'id_course' => 6,
        ]);

        userCourse::create([
            'id_user' => 3,
            'id_course' => 7,
        ]);
        userCourse::create([
            'id_user' => 3,
            'id_course' => 8,
        ]);
        userCourse::create([
            'id_user' => 3,
            'id_course' => 9,
        ]);

        userCourse::create([
            'id_user' => 4,
            'id_course' => 1,
        ]);
        userCourse::create([
            'id_user' => 4,
            'id_course' => 2,
        ]);
        userCourse::create([
            'id_user' => 4,
            'id_course' => 3,
        ]);

        userCourse::create([
            'id_user' => 5,
            'id_course' => 4,
        ]);
        userCourse::create([
            'id_user' => 5,
            'id_course' => 5,
        ]);
        userCourse::create([
            'id_user' => 5,
            'id_course' => 6,
        ]);

        userCourse::create([
            'id_user' => 6,
            'id_course' => 7,
        ]);
        userCourse::create([
            'id_user' => 6,
            'id_course' => 8,
        ]);
        userCourse::create([
            'id_user' => 6,
            'id_course' => 9,
        ]);
    }
}
