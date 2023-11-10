<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LulusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lulusan')->insert([
            'nama' => 'Firqi Saputra',
            'nim' => '6304211333',
            'prodi' => 'RPL',
            'Tahun_lulus' => '2025',
            'pekerjaan_sekarang' => 'web developer',
            'pendidikan_lanjutan' => 'S2'
            ]);
    }
}