<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Nama tabel di database (Pastikan di database namanya memang mahasiswas)
    protected $table = 'mahasiswas';

    // Memberitahu Laravel bahwa Primary Key adalah nim, bukan id
    protected $primaryKey = 'nim';

    // NIM biasanya string dan bukan angka auto-increment
    public $incrementing = false;
    protected $keyType = 'string';

    // Kolom yang boleh diisi secara massal
    protected $fillable = [
        'nim',
        'nama',
        'kelas',
        'matakuliah'
    ];
}
