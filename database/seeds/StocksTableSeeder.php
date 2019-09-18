<?php

use Illuminate\Database\Seeder;

class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->insert([
            'id_product' => 1,
            'stock_quantity' => 20,
            'created_at' => now(),
        ]);

        DB::table('stocks')->insert([
            'id_product' => 2,
            'stock_quantity' => 120,
            'created_at' => now(),
        ]);
        DB::table('stocks')->insert([
            'id_product' => 3,
            'stock_quantity' => 00,
            'created_at' => now(),
        ]);
        DB::table('stocks')->insert([
            'id_product' => 4,
            'stock_quantity' => 10,
            'created_at' => now(),
        ]);
        DB::table('stocks')->insert([
            'id_product' => 5,
            'stock_quantity' => 25,
            'created_at' => now(),
        ]);
    }
}
