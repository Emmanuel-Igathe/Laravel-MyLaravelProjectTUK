<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Men;

class MenSeeder extends Seeder
{
    public function run(): void
    {
        $MenProducts = [
                  [
        'name' => 'Blue Fashion T-Shirt',
        'image_url' => 'https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/30/5937762/1.jpg?0498',
        'old_price' => 850,
        'new_price' => '700',
        'discount' => '-20%',
        'reviews' => 78,
        'category' => 'men'
    ],
    [
        'name' => 'Trendy Multi sleeve',
        'image_url' => 'https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/30/2942992/1.jpg?3427',
        'old_price' => 750,
        'new_price' => '600',
        'discount' => '-25%',
        'reviews' => 49,
        'category' => 'men'
    ],
    [
        'name' => 'Sweatshirts',
        'image_url' => 'https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/01/2942992/1.jpg?6269',
        'old_price' => 1000,
        'new_price' => '660',
        'discount' => '-34%',
        'reviews' => 76,
        'category' => 'men'
    ],
    [
        'name' => 'Thick skull',
        'image_url' => 'https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/68/4572303/1.jpg?8345',
        'old_price' => 704,
        'new_price' => '421',
        'discount' => '-46%',
        'reviews' => 100,
        'category' => 'men'
    ],
    [
        'name' => 'Duo-color Jesus',
        'image_url' => 'https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/77/4572303/1.jpg?8346',
        'old_price' => 704,
        'new_price' => '320',
        'discount' => '-59%',
        'reviews' => 32,
        'category' => 'men'
    ],
    [
        'name' => 'Duo-color Thick bear',
        'image_url' => 'https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/52/6382303/1.jpg?0684',
        'old_price' => 750,
        'new_price' => '489',
        'discount' => '-25%',
        'reviews' => 25,
        'category' => 'men'
    ],
    [
        'name' => 'Vintage African Traditional short sleeve',
        'image_url' => 'https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/71/9680892/1.jpg?3563',
        'old_price' => 1000,
        'new_price' => '660',
        'discount' => '-34%',
        'reviews' => 57,
        'category' => 'men'
    ],
    [
        'name' => 'Patriot\'s Shirt',
        'image_url' => 'https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/43/6382303/1.jpg?5246',
        'old_price' => 704,
        'new_price' => '513',
        'discount' => '-35%',
        'reviews' => 89,
        'category' => 'men'
    ]
            // Add more Men's products...
        ];

        foreach ($MenProducts as $product) {
            Men::create($product);
        }
    }
}