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
            [
                'name' => 'php',
                'slug' => 'php',
                'color' => 'nav-elipse-blue'
            ],
            [
                'name' => 'laravel',
                'slug' => 'laravel',
                'color' => 'nav-elipse-red'
            ],
            [
                'name' => 'vue',
                'slug' => 'vue',
                'color' => 'nav-elipse-yellow'
            ],
            [
                'name' => 'linux',
                'slug' => 'linux',
                'color' => 'nav-elipse-green'
            ],
            [
                'name' => 'sin categoria',
                'slug' => 'uncategorized',
                'color' => ''
            ],
        ];
        
        foreach ($categories as $key) {
            Category::create([
                'name' => $key['name'],
                'slug' => $key['slug'],
                'color' => $key['color']
            ]);
        }
    }
}
