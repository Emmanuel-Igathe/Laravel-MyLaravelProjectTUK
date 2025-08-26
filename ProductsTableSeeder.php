<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Ladies top tees',
                'description' => 'Stylish ladies top t-shirts',
                'image_url' => 'https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/58/043766/1.jpg?7709',
                'old_price' => 1398,
                'new_price' => '899',
                'discount' => '-36%',
                'reviews' => 78,
                'category' => 'women'
            ],
            [
                'name' => 'Graphic Cute Tees',
                'description' => 'Cute graphic print t-shirts',
                'image_url' => 'https://ke.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/97/4145962/1.jpg?0198',
                'old_price' => 535,
                'new_price' => '390',
                'discount' => '-27%',
                'reviews' => 64,
                'category' => 'women'
            ],
            // Add all your other products here...
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}