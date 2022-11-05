<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Products::create(
            [
                'product_name' => 'MICKE Computer Desk',
                'product_type' => 'Table',
                'product_price' => 85,
                'product_description' => 'A clean and simple look that fits just about anywhere. You can combine it with other desks or drawer units in the MICKE series to extend your work space. The clever design at the back hides messy cables.',
                'created_at' => Date::today(),
                'image' => 'MICKE Computer Desk.jpg'
            ]
        );

        Products::create(
            [
                'product_name' => 'Three Seat Sofa',
                'product_type' => 'Sofa',
                'product_description' => 'Our beloved EKTORP seating has a timeless design and wonderfully thick, comfy cushions. The covers are easy to change, so buy an extra cover - or two, and change according to mood or season.',
                'product_price' => 499,
                'image' => 'Three Seat Sofa.jpg'
            ]
        );
    }
}
