<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i=0; $i < 50; $i++) { 
            Books::create([
                'name' => $faker->sentence,
                'author' => $faker->name,
                'publish_date' => $faker->date,
            ]);
        }
    }
}
