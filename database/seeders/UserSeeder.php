<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'lastname' => 'Employee',
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'type_id' => UserType::where('title', 'employee')->first()->id,
                'active' => 1,
                'password' => Hash::make('12345678')
            ],
            [
                'lastname' => 'Customer',
                'name' => 'Test',
                'email' => 'customer@gmail.com',
                'type_id' => UserType::where('title', 'customer')->first()->id,
                'active' => 1,
                'password' => Hash::make('12345678')
            ]
        ]);
    }
}
