<?php

use Illuminate\Database\Seeder;

class ProductsImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'product_id' => 14,
                'image' => 'top2,1.jpg'
            ],
            [
                'product_id' => 14,
                'image' => 'top2,2.jpg'
            ],
            [
                'product_id' => 14,
                'image' => 'top2,3.jpg'
            ],
            [
                'product_id' => 14,
                'image' => 'top2,4.jpg'
            ],

        ];
        DB::table('products_images')->insert($data);
    }
}
