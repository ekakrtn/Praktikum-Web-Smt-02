<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'dokters';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama',
        'spesialis',
        'gender',
    ];
}
