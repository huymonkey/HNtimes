<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 50; $i++) {

            $randomCategory = Category::query()->inRandomOrder()->first();
            $name = fake()->unique()->words(2, true);

            SubCategory::query()->create([
                'category_id' => $randomCategory->id,
                'name' => $name,
                'slug' => Str::slug($name),
                'ordinal' => fake()->unique()->numberBetween(1, 50),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }
    }
}
