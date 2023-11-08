<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Review;
use App\Models\Book;
use App\Models\User;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("reviews")->delete();
        $faker = Faker::create();
        $userid = User::all()->pluck("id")->toArray();
        $bookid = Book::all()->pluck("id")->toArray();
        for ($i = 0; $i < 20; $i++) {
            Review::create([
                "BookID"=> $faker->randomElement($bookid),
                "UserID"=> $faker->randomElement($userid),
                "rating"=>$faker->numberBetween(1,5),
                "ReviewText"=>$faker->paragraph(3),
                "ReviewDate"=>$faker->date("Y-m-d"),
            ]);
        }
    }
}
