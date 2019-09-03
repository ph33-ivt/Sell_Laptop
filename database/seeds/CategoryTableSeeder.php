<?php

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
        $data =  [
            [
                'name' => 'apple',

            ],
            [
                'name' => 'hp',

            ],
            [
                'name' => 'dell',

            ],
            [
                'name' => 'asus',

            ],
            [
                'name' => 'acer',

            ],
            // [
            //     'name' => 'bestsell',

            // ],
            // [
            //     'name' => 'top_product',

            // ],

        ];
        DB::table('categories')->insert($data);
    }
}
