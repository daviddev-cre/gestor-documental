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
                'email' => 'admin@gmail.com',
                'password' =>  Hash::make('admin1234')
            ]);
    
            $admin->assignRole('admin');
    
            $review = User::create([
                'name' => 'review',
                'email' => 'review@gmail.com',
                'password' => Hash::make('review1234')
            ]);
    
            $review->assignRole('review');
    
            $user = User::create([
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user1234')
            ]);
    
            $user->assignRole('user');
        }
    }
}