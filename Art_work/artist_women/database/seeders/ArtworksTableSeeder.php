<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Artwork;
use Illuminate\Support\Testing\Fakes\Fake;

class ArtworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("artworks")->delete();
        $faker = Faker::create();
        for($i = 0; $i<15; $i++){
            Artwork::create([
                'artist_name' => $faker->name, 
                'description' =>$faker->text,
                'art_type' => $faker->randomElement(['art', 'music', 'literature']),  
                'media_link' =>$faker->url(),
                'cover_image' =>$faker->imageUrl(),
                
            ]);
        }
    }
}
