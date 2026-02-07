<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Menampilkan daftar mahasiswa.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * Menampilkan form tambah mahasiswa.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Menyimpan data mahasiswa baru.
     */
    public function store(Request $request)
    {
        // 1. Validasi
        $validated = $request->validate([
            'nim' => 'required|unique:mahasiswas,nim|string|max:20',
            'nama' => 'required|string|max:100',
            'kelas' => 'required|string|max:10',
            'matakuliah' => 'required|string|max:50'
        ]);

        // 2. Simpan (Pastikan fillable di Model sudah ada)
        Mahasiswa::create($validated);

        // 3. Redirect dengan pesan sukses
        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    /**
     * Menampilkan form edit mahasiswa.
     */
    public function edit($id)
    {
        // Karena primary key sudah diset 'nim' di Model, findOrFail akan mencari ke kolom NIM
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Memperbarui data mahasiswa.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nim' => 'required|string|max:20|unique:mahasiswas,nim,' . $id . ',nim',
            'nama' => 'required|string|max:100',
            'kelas' => 'required|string|max:10',
            'matakuliah' => 'required|string|max:50'
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($validated);

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    /**
     * Menghapus data mahasiswa.
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
