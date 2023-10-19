<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Testing\Fakes\Fake;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('books')->delete();
        $faker =Faker::create();
        $author_ids = Author::all()->pluck('id')->toArray();
        for($i = 0; $i < 100; $i++){
            Book::create([
                'author_id' =>$faker->randomElement($author_ids),
                'title' => $faker->sentence(5),
            ]);
        }

    }
}
