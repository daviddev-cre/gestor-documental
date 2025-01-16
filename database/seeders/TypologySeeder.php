<?php

namespace Database\Seeders;

use App\Models\Typologies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Typologies::create([
            'typologyName' => 'No asignado'
        ]);
        Typologies::create([
            'typologyName' => 'Spa'
        ]);

        Typologies::create([
            'typologyName' => 'Centro de estética'
        ]);
    }
}
