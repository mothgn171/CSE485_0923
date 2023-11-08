<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Book;
use App\Models\User;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("books")->delete();
        $faker = Faker::create();
        $book_ids = Book::all()->pluck('id')->toArray();
        //$userid = User::all()->pluck('id')->toArray();
        for($i = 0; $i<15; $i++){
            Book::create([
                
                'title' => $faker->text, 
                'author'=>$faker->name,
                'Genre' => $faker->randomElement(['Detective', 'Romance', 'Comedy', 'Science']),
                'PublicationYear' =>$faker->year,
                'ISBN' =>$faker->ean13(),
                'CoverImageURL' =>$faker->imageUrl(),
                
                
            ]);
        }
    }
}
