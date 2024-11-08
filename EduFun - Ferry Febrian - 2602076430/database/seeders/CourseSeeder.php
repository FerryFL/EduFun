<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $name = [
            'Human and Computer Interaction',
            'User Experience',
            'User Experience for Digital Immersive Technology',
            'Pattern Software Design',
            'Agile Software Development',
            'Code Reengineering'
        ];

        for ($i = 0; $i < 6; $i++) {
            Course::create([
                'category_id' => $i < 3 ? 1 : 2,
                'writer_id' => rand(1, 3),
                'name' => $name[$i],
                'description' => $faker->text,
                'image' => ($i + 1) . '.jpg',
                'date' => "6 Nov 2024"
            ]);
        }
    }
}
