<?php

namespace Database\Seeders;

use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the number of dummy products you want to create
        $numberOfProducts = 10;

        // Loop through and create dummy products
        for ($i = 1; $i <= $numberOfProducts; $i++) {
            $randomId = rand(100000, 999999);
            while (Product::where('id', $randomId)->exists()) {
                $randomId = rand(100000, 999999);
            }
            Product::create([
                'id' => $randomId,
                'name' => 'Product ',
                'description' => 'Description of Product ',
                'image' => 'Image of Product ',
                'price' => rand(10, 100), // Generate a random price
                'stock' => rand(0, 100), // Generate a random stock quantity
                'kode_satuan' => rand(1, 10), // Example value for kode_satuan
            ]);
        }
    }
}
