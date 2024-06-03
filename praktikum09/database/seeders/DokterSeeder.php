<?php

namespace Database\Seeders;

use App\Models\Dokter;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dokter::insert([
            [
                'nama' => 'Dr. Eka Kartini',
                'spesialis' => 'Umum',
                'gender' => 'P',
            ],
            [
                'nama' => 'Dr. Eko Tatabudiman',
                'spesialis' => 'Gigi',
                'gender' => 'L',
            ],
            [
                'nama' => 'Dr. Pathi',
                'spesialis' => 'Paru paru',
                'gender' => 'L',
            ],
            [
                'nama' => 'Dr. Nurhayati',
                'spesialis' => 'Psikologi',
                'gender' => 'P',
            ],
        ]);
    }
}
