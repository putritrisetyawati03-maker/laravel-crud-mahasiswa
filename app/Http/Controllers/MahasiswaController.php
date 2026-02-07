<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
$mahasiswas = Mahasiswa::all();
return view('mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nim' => 'required|unique:mahasiswa,nim|string|max:20',
            'nama' => 'required|string|max:100',
            'kelas' => 'required|string|max:10',
            'matakuliah' => 'required|string|max:50'
        ]);

        // Simpan data
        Mahasiswa::create($validated);

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data dengan pengecualian untuk NIM yang sedang diedit
        $validated = $request->validate([
            'nim' => 'required|unique:mahasiswas,nim,' . $id . ',nim|string|max:20',
            'nama' => 'required|string|max:100',
            'kelas' => 'required|string|max:10',
            'matakuliah' => 'required|string|max:50'
        ]);

        // Cari data berdasarkan NIM
        $mahasiswa = Mahasiswa::findOrFail($id);
        
        // Update data
        $mahasiswa->update($validated);

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Cari data
        $mahasiswa = Mahasiswa::findOrFail($id);
        
        // Hapus data
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
