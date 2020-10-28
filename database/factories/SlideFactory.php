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
            'image'=>'https://picsum.photos/77'.rand(0,3).'/61'.rand(0,1),
            'link'=>route('product.show',$product->slug),
            'title_small'=>'Tiêu đề nhỏ '.rand(1,99),
            'title_big'=>'Tiêu đề lớn '.rand(1,99),
            'type'=>$type,
            'key'=>$type=='code'?'Mã giảm giá':'Chỉ còn',
            'value'=>$type=='code'?$code->name:ceil($price),
            'status'=>rand(0,1)
        ];
    }
}
