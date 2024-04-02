<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use Database\Factories\ReviewFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      Book::factory(34)->create()->each(function ($book) {
        $numReviews = random_int(5,30);

        ReviewFactory::factory()->count($numReviews)->good()->for($book)->create();
      });

      Book::factory(33)->create()->each(function ($book) {
        $numReviews = random_int(5,30);

        ReviewFactory::factory()->count($numReviews)->average()->for($book)->create();
      });

      Book::factory(33)->create()->each(function ($book) {
        $numReviews = random_int(5,30);

        ReviewFactory::factory()->count($numReviews)->bad()->for($book)->create();
      });
    }
    
}
