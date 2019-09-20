<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'preparation_date' => now(),
            'removal_date' => now(),
            'status' => 'to do',
            'id_user' => 2,
            'created_at' => now(),
        ]);


        DB::table('orders')->insert([
            'preparation_date' => now()->subDays(10),
            'removal_date' => now()->addDays(3),
            'status' => 'ready',
            'id_user' => 2,
            'created_at' => now(),
        ]);

        DB::table('orders')->insert([
            'preparation_date' => now()->subDays(1),
            'removal_date' => now()->addDays(1),
            'status' => 'collected',
            'id_user' => 2,
            'created_at' => now(),
        ]);


        DB::table('orders')->insert([
            'preparation_date' => now()->subDays(2),
            'removal_date' => now()->addDays(3),
            'status' => 'to do',
            'id_user' => 2,
            'created_at' => now(),
        ]);


    }
}
