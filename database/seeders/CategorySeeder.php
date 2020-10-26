<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        Category::create([
            'name'=>'Orchid',
            'slug'=>'orchid'
        ])->products()->attach(Product::all()->random(20));
        Category::create([
            'name'=>'Coniferous tree',
            'slug'=>'coniferous-tree'
        ])->products()->attach(Product::all()->random(20));
    }
}
