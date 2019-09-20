<?php

use Illuminate\Database\Seeder;

class OrderProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_product')->insert([
            'id_order' => 2,
            'id_product' => 2,
            'product_quantity' => 3,
            'created_at' => now(),
        ]);
        DB::table('order_product')->insert([
            'id_order' => 2,
            'id_product' => 3,
            'product_quantity' => 1,
            'created_at' => now(),
        ]);
        DB::table('order_product')->insert([
            'id_order' => 2,
            'id_product' => 4,
            'product_quantity' => 2,
            'created_at' => now(),
        ]);

        DB::table('order_product')->insert([
            'id_order' => 1,
            'id_product' => 2,
            'product_quantity' => 3,
            'created_at' => now(),
        ]);
        DB::table('order_product')->insert([
            'id_order' => 1,
            'id_product' => 3,
            'product_quantity' => 1,
            'created_at' => now(),
        ]);
        DB::table('order_product')->insert([
            'id_order' => 1,
            'id_product' => 4,
            'product_quantity' => 2,
            'created_at' => now(),
        ]);
        DB::table('order_product')->insert([
            'id_order' => 1,
            'id_product' => 5,
            'product_quantity' => 2,
            'created_at' => now(),
        ]);



    }
}