<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'firstname' => 'Admin',
            'lastname' => 'admin',
            'email' => 'admin@argon.com',
            'email_verified_at' => now(),
            'type' => 'Admin',
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'firstname' => 'Bubuy',
            'lastname' => 'Ragadio',
            'email' => 'bubuy@gmail.com',
            'email_verified_at' => now(),
            'type' => 'Client',
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
