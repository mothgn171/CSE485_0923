<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('authors')->delete();
        $faker = Faker::create();
        for($i= 0; $i<50; $i++) {
            Author::create([
                'name'=>$faker->name,
            ]);
        }

    }
}
