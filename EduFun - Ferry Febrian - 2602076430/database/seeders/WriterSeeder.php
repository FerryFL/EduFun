<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = [
            'Rakaputra Wicaksono',
            'Bia Mecca Annisa',
            'Abi Firmansyah'
        ];

        for ($i = 0; $i < 3; $i++) {
            Writer::create([
                'name' => $name[$i],
                'image' => 'pp' . ($i + 1) . '.jpg'
            ]);
        }
    }
}
