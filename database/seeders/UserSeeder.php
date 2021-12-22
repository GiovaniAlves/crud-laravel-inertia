<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<20; $i++){
            User::insert(
                [
                    'name' => Str::random(10),
                    'email' => Str::random(8).'@email.com',
                    'password' => Hash::make('password')
                ]
            );
        }
    }
}
