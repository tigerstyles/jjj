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
        \DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@jobboard.test',
            'password' => bcrypt('jobboard'),
            'created_at' => now(),
            'updated_at' => now(),
            'remember_token' => str_random(10),
        ]);
    }
}
