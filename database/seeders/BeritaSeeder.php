<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('berita')->insert([
        'judul_berita' => 'dosen ti polbeng melaksanakan pelatihan',
        'tanggal' => '20 Oktober 2023',
        'penulis' => 'Firqi Saputra',
        'gambar' => 'pelatihan.jpg',
        'isi_berita' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos beatae esse cum atque omnis? Mollitia
            fugiat et excepturi cumque tempora.'
        ]);
    }
}