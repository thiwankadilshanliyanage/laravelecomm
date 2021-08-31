<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
        [
            'name' => 'Oppo Mobile',
            'price'=> '30000',
            'description'=>"A smart phone with 4 gb ram and more features",
            'category'=>"mobile",
            'gallery'=> "https://5.imimg.com/data5/WG/ZM/TG/ANDROID-98089178/product-jpeg-500x500.jpg"
        ],
        [
                'name' => 'Samsung Mobile',
                'price' => '25000',
                'description' => "A smart phone with 8 gb ram and more features",
                'category' => "mobile",
                'gallery' => "https://images.samsung.com/is/image/samsung/in-galaxy-s10-sm-g975-sm-g975fzwdins-prismwhite-thumb-207759190?$320_320_PNG$" 
        ],
        [
                'name' => 'Samsung TV',
                'price' => '200000',
                'description' => "A smart TV with more features",
                'category' => "TV",
                'gallery' => "https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6268/6268404_sd.jpg"
        ],
        [
                'name' => 'Samsung Headset',
                'price' => '200',
                'description' => "Handfree",
                'category' => "mobile parts",
                'gallery' => "https://static-01.daraz.lk/p/4293bcb97c789c5206616cd76349d3ce.jpg"
        ]
        ]);
    }
}
