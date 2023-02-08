<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Publisher::factory()->count(5)->create();

        Publisher::factory()->count(5)
            ->has(Book::factory()->count(5))
            ->create();

        // Publisher::all()->each(function (Publisher $publisher){
        //     $book = Book::factory()->count(5)->create();
        //     $publisher->books()->saveMany($book);

        // });

        $categories = Category::factory()->count(5)->create();

        // Book::factory()->count(5)->hasAttached($categories)->create();

        foreach(Book::all() as $book){
            $categories = Category::take(rand(1,5))->pluck('id');
            $book->categories()->attach($categories,[
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
