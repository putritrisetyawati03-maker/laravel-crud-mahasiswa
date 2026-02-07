<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda
    protected $table = 'mahasiswas';

    // Tentukan primary key
    protected $primaryKey = 'nim';

    // Tentukan apakah primary key auto increment
    public $incrementing = false;

    // Tentukan tipe data primary key
    protected $keyType = 'string';

    // Field yang bisa diisi massal
    protected $fillable = [
        'nim',
        'nama', 
        'kelas',
        'matakuliah'
    ];

    // Timestamps
    public $timestamps = true;
}