<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Women;

class WomenSeeder extends Seeder
{
    public function run(): void
    {
        $womenProducts = [
            [
                'name' => 'Ladies top tees',
                'image_url' => 'https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/58/043766/1.jpg?7709',
                'old_price' => 1398,
                'new_price' => 899,
                'discount' => '-36%',
                'reviews' => 78,
                'category' => 'women'
            ],
            [
                'name' => 'Graphic Cute Tees',
                'image_url' => 'https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/97/4145962/1.jpg?0198',
                'old_price' => 535,
                'new_price' => 390,
                'discount' => '-27%',
                'reviews' => 64,
                'category' => 'women'
            ],
            [
                    'name' => 'BLWOENS Cute fit shirts',
                    'image_url' => 'https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/89/4145962/1.jpg?0196',
                    'old_price' => 535,
                    'new_price' => '390',
                    'discount' => '-27%',
                    'reviews' => 80,
                    'category' => 'women'
                ],
                [
                    'name' => 'Top round neck',
                    'image_url' => 'https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/41/3861232/1.jpg?6872',
                    'old_price' => 904,
                    'new_price' => '904',
                    'discount' => '0%',
                    'reviews' => 98,
                    'category' => 'women'
                ],
                [
                    
                    'name' => 'PCS ladies tops',
                    'image_url' => 'https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/06/9363271/1.jpg?0112',
                    'old_price' => 1398,
                    'new_price' => '899',
                    'discount' => '-36%',
                    'reviews' => 64,
                    'category' => 'women'
                ],
                [
                    'name' => 'Casual short sleeve',
                    'image_url' => 'https://ke.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/43/0379662/1.jpg?8140',
                    'old_price' => 1000,
                    'new_price' => '610',
                    'discount' => '-25%',
                    'reviews' => 74,
                    'category' => 'women'
                ],
                [
                    'name' => 'Yixin 3 pieces',
                    'image_url' => 'https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/78/9532291/1.jpg?0553',
                    'old_price' => 1340,
                    'new_price' => '1059',
                    'discount' => '-21%',
                    'reviews' => 76,
                    'category' => 'women'
                ],
                [
                    'name' => 'Summer shirt',
                    'image_url' => 'https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/37/7011562/1.jpg?1388',
                    'old_price' => 535,
                    'new_price' => '377 - 390',
                    'discount' => '-34%',
                    'reviews' => 29,
                    'category' => 'women'
                ]
            // Add more women's products...
        ];

        foreach ($womenProducts as $product) {
            Women::create($product);
        }
    }
}
