<?php

namespace Database\Seeders;

use App\Models\Channel;
use App\Models\User;
use App\Models\Student;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Course::factory()->create([
            'courseName' => 'PHP',
            'courseID' => 'HTTP5225'
        ]);
        Course::factory()->create([
            'courseName' => 'React',
            'courseID' => 'HTTP5227'
        ]);
        Course::factory()->create([
            'courseName' => 'JavaScript',
            'courseID' => 'HTTP5226'
        ]);

        Student::factory(10)->create();

        Channel::factory()->create([
            'name' => 'Web Dev Simplified',
            'url' => 'https://www.youtube.com/c/webdevsimplified'
        ]);

        Channel::factory()->create([
            'name' => 'The Net Ninja',
            'url' => 'https://www.youtube.com/channel/UCW5YeuERMmlnqo4oq8vwUpg/videos'
        ]);

        Channel::factory()->create([
            'name' => 'CS Dojo',
            'url' => 'https://www.youtube.com/channel/UCxX9wt5FWQUAAz4UrysqK9A'
        ]);

        Channel::factory()->create([
            'name' => 'Traversy Media',
            'url' => 'https://www.youtube.com/channel/UC29ju8bIPH5as8OGnQzwJyA'
        ]);



    }
}
