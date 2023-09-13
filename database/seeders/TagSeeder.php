<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'name' => 'eten'
        ]);

        Tag::create([
            'name' => 'kleren'
        ]);

        Tag::create([
            'name' => 'huishouden'
        ]);

        Tag::create([
            'name' => 'games'
        ]);

        Tag::create([
            'name' => 'keuken'
        ]);
        Tag::create([
            'name' => 'computers'
        ]);
    }
}
