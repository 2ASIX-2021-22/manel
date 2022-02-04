<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $product1 = Product::create([
            'name'=>'Producte 1',
            'description'=>'Bla bla bla 1',
            'image'=>'http://unsplash.it/400/200/?image=1',
            'price'=>'50',
        ]);

        $product2 = Product::create([
            'name'=>'Producte 2',
            'description'=>'Bla bla bla 2',
            'image'=>'http://unsplash.it/400/200/?image=10',
            'price'=>'40',
        ]);

        $product3 = Product::create([
            'name'=>'Producte 3',
            'description'=>'Bla bla bla 3',
            'image'=>'http://unsplash.it/400/200/?image=20',
            'price'=>'30',
        ]);
    }
}
