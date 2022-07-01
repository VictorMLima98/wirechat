<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'name' => 'Victor Lima',
                'email' => 'victor.mlima19@gmail.com',
                'password' => Hash::make('1234')
            ], [
                'name' => 'Dummy Test',
                'email' => 'dummy@gmail.com',
                'password' => Hash::make('1234')
            ]
        ]);
    }
}
