<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = ['front', 'UX', 'Vue', 'Js', 'Back'];

        foreach ($tags as $tag) {
            Tag::create(['name' => $tag, 'slug' => $tag]);
        }
    }
}
