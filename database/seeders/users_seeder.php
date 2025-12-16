<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
 DB::table('users')->insert([
            ['name' => 'Admin Leigh',
             'username' => 'admin1',
             'password' => 'admin1',
             'email' => 'admin1@email.com',
             'phone' => '01234567899',
             'address' => 'pili',
             'role' => 'Admin',
            
]   
        ]);

    }
}
