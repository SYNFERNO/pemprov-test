<?php

namespace Database\Seeders;

use App\Models\userCourse;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CourseSeeder::class,
            userCourseSeeder::class
        ]);
    }
}
