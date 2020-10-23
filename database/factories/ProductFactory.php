<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
//        'poster','name','slug','status','price','quantity','user_id'
        $fake=$this->faker;
        return [
            'poster'=>$fake->imageUrl(500,500),
            'name'=>$fake->unique()->company,
            'slug'=>\Str::slug($fake->unique()->company),
            'status'=>rand(0,1),
            'price'=>rand(100,5000),
            'quantity'=>rand(0,100),
            'user_id'=>User::all()->random()
        ];
    }
}
