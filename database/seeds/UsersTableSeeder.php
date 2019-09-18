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
        ]);
    }
}
