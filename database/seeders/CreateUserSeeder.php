<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'ADMIN',
                'email' => 'admin@gmail.com',
                'is_admin' => '1',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'RESEPSIONIS',
                'email' => 'resepsionis@gmail.com',
                'is_admin' => '0',
                'password' => Hash::make('password'),
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
