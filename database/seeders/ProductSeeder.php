<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'name'=>'OppoMobile',
            'price'=>'120000',
            'category'=>'Mobile',
            'description'=>'mobile with more feature',
            'gallery'=>'https://cdn.pixabay.com/photo/2013/07/21/13/00/rose-165819_960_720.jpg'
        ],

        [
            'name'=>'RealMe',
            'price'=>'220000',
            'category'=>'Tv',
            'description'=>'Tv with more feature',
            'gallery'=>'https://images.pexels.com/photos/736230/pexels-photo-736230.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
        ],
        [
            'name'=>'Samusug',
            'price'=>'250000',
            'category'=>'fridge',
            'description'=>'fridge with more feature',
            'gallery'=>'https://cdn.pixabay.com/photo/2015/04/19/08/32/marguerite-729510__340.jpg'
        ],
        [
            'name'=>'Lg',
            'price'=>'300000',
            'category'=>'AC',
            'description'=>'AC with more feature',
            'gallery'=>'https://cdn.britannica.com/84/73184-004-E5A450B5/Sunflower-field-Fargo-North-Dakota.jpg'
            
            
        ]

      ]);
}
}
