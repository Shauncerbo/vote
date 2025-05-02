<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'FirstName' => 'Jessie',
            'MiddleName' => 'Manulat',
            'LastName' => 'Alegado',
            'Sex'=> 'Male',
            'ContactNumber' => '09123456789',
            'email' => 'AdminUser@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), 
            'remember_token' => Str::random(10),
            'department_id' => 10,
            'position_id' => 2,
        ]);


       



        

    }
}
