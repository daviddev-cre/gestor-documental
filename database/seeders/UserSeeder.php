<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $admin = User::create([
                'name' => 'admin',
                'position' => 'administrador',
                'IdUser' => '1020738421',
                'professionalCard' => '545484848',
                'address' => 'calle 23 # 50 -72',
                'email' => 'admin@gmail.com',
                'password' =>  Hash::make('admin1234'),
                'cellphone' => 0000000000,
                'whatsapp' => 0000000000,
                'state' => 1,
                'icon' => 'admin.jpg',
                'user_code' => 000000
            ]);
    
            $admin->assignRole('admin');
    
            $review = User::create([
                'name' => 'review',
                'position' => 'revisor',
                'IdUser' => '1000254781',
                'professionalCard' => '2251516161',
                'address' => 'diagonal 51 # 23 -43',
                'email' => 'review@gmail.com',
                'password' => Hash::make('review1234'),
                'cellphone' => 0000000000,
                'whatsapp' => 0000000000,
                'state' => 1,
                'icon' => 'review.jpg',
                'user_code' => 000000
            ]);
    
            $review->assignRole('review');
    
            $user = User::create([
                'name' => 'usuario',
                'position' => 'user',
                'IdUser' => '45125789',
                'professionalCard' => '6516161',
                'address' => 'carrera 96 # 89a - 23',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user1234'),
                'cellphone' => 0000000000,
                'whatsapp' => 0000000000,
                'state' => 1,
                'icon' => 'user.jpg',
                'user_code' => 000000
            ]);
    
            $user->assignRole('user');
        }
    }
}
