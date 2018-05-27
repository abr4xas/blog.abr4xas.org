<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'php',
            'laravel',
            'vue',
            'linux',
            'uncategorized'
        ];
        
        foreach ($categories as $key) {
            Category::create([
                'name' => $key,
                'slug' => $key
            ]);
        }
    }
}
