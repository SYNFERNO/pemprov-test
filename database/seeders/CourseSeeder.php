<?php

namespace Database\Seeders;

use App\Models\course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        course::create([
            'course' => 'C++',
            'mentor' => 'Ari',
            'title' => 'Dr.',
        ]);

        course::create([
            'course' => 'C#',
            'mentor' => 'Ari',
            'title' => 'Dr.',
        ]);

        course::create([
            'course' => 'C#',
            'mentor' => 'Ari',
            'title' => 'Dr.',
        ]);

        course::create([
            'course' => 'CSS',
            'mentor' => 'Cania',
            'title' => 'S.Kom',
        ]);

        course::create([
            'course' => 'HTML',
            'mentor' => 'Cania',
            'title' => 'S.Kom',
        ]);

        course::create([
            'course' => 'Javascript',
            'mentor' => 'Cania',
            'title' => 'S.Kom',
        ]);

        course::create([
            'course' => 'Python',
            'mentor' => 'Barry',
            'title' => 'S.T',
        ]);

        course::create([
            'course' => 'Microyython',
            'mentor' => 'Barry',
            'title' => 'S.T',
        ]);

        course::create([
            'course' => 'Java',
            'mentor' => 'Darren',
            'title' => 'M.T',
        ]);

        course::create([
            'course' => 'Ruby',
            'mentor' => 'Darren',
            'title' => 'M.T',
        ]);
    }
}
