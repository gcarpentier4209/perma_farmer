<?php

use Illuminate\Database\Seeder;

class SubscriptionOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscription_options')->insert([
            'label' => 'Petite formule',
            'price' => 12.50,
            'weight' => 2.5,
        ]);

        DB::table('subscription_options')->insert([
            'label' => 'Grande formule',
            'price' => 24.90,
            'weight' => 7,
        ]);
    }
}
