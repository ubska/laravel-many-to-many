<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Functions\Helper;
use App\Models\Type;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
            $new_post = new Post();
            $new_post->type_id = Type::inRandomOrder()->first()->id;
            $new_post->title = $faker->sentence;
            $new_post->slug = Helper::generateSlug($new_post->title, Post::class);
            $new_post->text = $faker->paragraph;
            $new_post->reading_time = $faker->numberBetween(1, 10);
            $new_post->save();
        }
    }
}
