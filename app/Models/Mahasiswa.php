<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'mahasiswas';

    // Memberitahu Laravel bahwa Primary Key adalah nim, bukan id
    protected $primaryKey = 'nim';

    // Jika NIM bukan angka yang auto-increment (misal: "220101"), set false
    public $incrementing = false;

    // Tipe data Primary Key
    protected $keyType = 'string';

    // Kolom yang boleh diisi (Mass Assignment)
    protected $fillable = [
        'nim',
        'nama',
        'kelas',
        'matakuliah'
    ];
}
