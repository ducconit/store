<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Slide;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

class SlideFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slide::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
//        'image','link','title_small','title_big','key','value','type'
        $product= Product::all()->random();
        $type=\Arr::random(['code','price']);
        $code=Ticket::all()->random();
        $price=$code->type=='percent'?$product->price*((100-$code->value)/100):$product->price-$code->value;
        return [
            'image'=>$product->poster,
            'link'=>route('product.show',$product->id),
            'title_small'=>\Arr::random(['Tiêu đề random 1', 'tiêu đề random 2','tiêu đề random 3']),
            'title_big'=>\Arr::random(['Tiêu đề big 1', 'tiêu đề big 2','tiêu đề big 3']),
            'type'=>$type,
            'key'=>$type=='code'?'Mã giảm giá':'Chỉ còn',
            'value'=>$type=='code'?$code->name:$price,
            'status'=>rand(0,1)
        ];
    }
}
