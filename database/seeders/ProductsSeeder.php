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

        Products::create([
            'product_name' => 'Corner Flakarp Sofa',
            'product_type' => 'Sofa',
            'product_description' => 'Explore the luxurious sofa, bring the luxury to your home.',
            'product_price' => 295.50,
            'price_deduction' => 58.50,
            'image' => 'Corner Flakarp Sofa.jpg'
        ]);

        Products::create([
            'product_name' => 'Strandmon Recliner Nordvalla Dark Grey',
            'product_type' => 'Chair',
            'product_description' => 'A chair that is designed for comfort in your home and wherever you are.',
            'product_price' => 399.50,
            'price_deduction' => 75.50,
            'image' => 'Strandmon Recliner Nordvalla Dark Grey.jpg'
        ]);

        Products::create([
            'product_name' => 'Double Sized Upholstered bed, with two storage boxes, Kabusa light grey',
            'product_type' => 'Bed',
            'product_description' => 'Providing convenience to your hands.',
            'product_price' => 309.50,
            'price_deduction' => 32.50,
            'image' => 'Double Sized Upholstered Bed.jpg'
        ]);

        Products::create([
            'product_name' => 'Single Sized Reversible bed, white/pine',
            'product_type' => 'Bed',
            'product_description' => 'A bed with more customisations.',
            'product_price' => 150,
            'price_deduction' => 38.49,
            'image' => 'Single Sized Reversible Bed.jpg'
        ]);

        Products::create([
            'product_name' => 'Office Desk',
            'product_type' => 'Table',
            'product_description' => 'An Office Desk with draws in order to organise your daily office workflows',
            'product_price' => 100,
            'price_deduction' => 15.80,
            'image' => 'office desk.jpg'
        ]);

        Products::create([
            'product_name' => 'Dining Table with Four Chairs (Black)',
            'product_type' => 'Table',
            'product_description' => 'Explore the modernised dining table, a dining table with four chairs, perfect for the family.',
            'product_price' => 269,
            'price_deduction' => 25,
            'image' => 'dining table four chairs black.jpg'
        ]);

        Products::create([
            'product_name' => 'Plastic Chair',
            'product_type' => 'Chair',
            'product_description' => 'A chair that is stackable, and can be stored away easily and be re-used according to your needs',
            'product_price' => 12,
            'price_deduction' => 0,
            'image' => 'plastic chair.jpg'
        ]);
    }
}
