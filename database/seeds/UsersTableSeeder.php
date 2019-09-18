<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Pierre',
            'last_name' => 'Dupont',
            'email' => 'admin@fake.com',
            'password' => bcrypt('password'),
            'type' => 'admin',
        ]);

        DB::table('users')->insert([
            'first_name' => 'Harry',
            'last_name' => 'Cover',
            'email' => 'hc@fake.com',
            'password' => bcrypt('password'),
            'type' => 'default',
        ]);

        DB::table('users')->insert([
            'first_name' => 'Dev',
            'last_name' => 'Loper',
            'email' => 'dl@fake.com',
            'password' => bcrypt('password'),
            'type' => 'default',
        ]);
    }
}
