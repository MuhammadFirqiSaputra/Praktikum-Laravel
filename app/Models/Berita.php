<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = "beritas";

    protected $fillable = ['judul_berita', 'tanggal', 'penulis', 'gambar', 'isi_berita'];
}
