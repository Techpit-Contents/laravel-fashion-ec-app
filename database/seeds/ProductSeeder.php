<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Black T-shirt',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/1.jpg',
                'price' =>'4500'
            ],
            [
                'name' => 'White T-shirt',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/2.jpg',
                'price' =>'4500'
            ],
            [
                'name' => 'White T-shirt 2',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/3.jpg',
                'price' =>'6800'
            ],
            [
                'name' => 'Black T-shirt Plain',
                'description' => 'コットン素材を使用したクルーネックのカットソー。シンプルなデザインで、様々なスタイリングに合わせやすいアイテム。',
                'image' => '/images/4.jpg',
                'price' =>'4500'
            ],
            [
                'name' => 'Black T-shirt 2',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/5.jpg',
                'price' =>'4500'
            ],
            [
                'name' => 'Navy T-shirt',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/6.jpg',
                'price' =>'4500'
            ],
            [
                'name' => 'Border T-shirt',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/7.jpg',
                'price' =>'6800'
            ],
            [
                'name' => 'Border Long Sleeve T-shirt',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/8.jpg',
                'price' =>'7800'
            ],
            [
                'name' => 'Gray T-shirt',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/9.jpg',
                'price' =>'4500'
            ],
        ]);
    }
}
