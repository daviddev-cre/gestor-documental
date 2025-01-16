<?php

namespace Database\Seeders;

use App\Models\TypePerson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypePersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypePerson::create([
            'typePersonName' => 'No definido'
        ]);

        TypePerson::create([
             'typePersonName' => 'Natural'
        ]);

        TypePerson::create([
            'typePersonName' => 'Jurídica'
       ]);
    }
}
