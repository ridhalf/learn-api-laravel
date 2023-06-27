<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $product = Product::create([
            'kategori' => 'Minuman',
            'nama' => 'Teh Pucuk',
        ]);
        $product = Product::create([
            'kategori' => 'Elektronik',
            'nama' => 'Macbook',
        ]);
        $product = Product::create([
            'kategori' => 'Perabot',
            'nama' => 'Kasur',
        ]);
        $product = Product::create([
            'kategori' => 'Perabot',
            'nama' => 'Bantal',
        ]);
    }
}
