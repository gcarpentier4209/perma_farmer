<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'label' => 'Tomates',
            'sales_unit' => 'kilogramme',
            'weight' => 1,
        ]);

        DB::table('products')->insert([
            'label' => 'Lait',
            'sales_unit' => 'Litre',
            'weight' => 1,
        ]);

        DB::table('products')->insert([
            'label' => 'oeufs',
            'sales_unit' => 'boite de 6',
            'weight' => 0.4,
        ]);

        DB::table('products')->insert([
            'label' => 'salade',
            'sales_unit' => 'unité',
            'weight' => 0.35,
        ]);

        DB::table('products')->insert([
            'label' => 'navets',
            'sales_unit' => 'kilogramme',
            'weight' => 1,
        ]);
        DB::table('products')->insert([
            'label' => 'pomme',
            'sales_unit' => 'kilogramme',
            'weight' => 1,
        ]);
    }
}
