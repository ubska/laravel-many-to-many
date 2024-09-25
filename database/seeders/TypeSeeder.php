<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use App\Functions\Helper;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['HTML', 'CSS', 'PHP', 'C++', 'JS'];

        foreach ($data as $type) {
            if (!Type::where('slug', Helper::generateSlug($type, Type::class))->exists()) {
                $new_type = new Type();
                $new_type->name = $type;
                $new_type->slug = Helper::generateSlug($new_type->name, Type::class);
                $new_type->save();
            }
        }
    }
}
