<?php

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
        //mécanique  factory désactivé
        //factory(App\Stock::class, 10)->create();
        //factory(App\Product::class, 20)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(StocksTableSeeder::class);
    }
}
