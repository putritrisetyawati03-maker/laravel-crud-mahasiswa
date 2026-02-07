<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="display-6">📋 Data Mahasiswa</h1>
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">➕ Tambah Mahasiswa</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Mata Kuliah</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($mahasiswas as $key => $mahasiswa)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><strong>{{ $mahasiswa->nim }}</strong></td>
                                <td>{{ $mahasiswa->nama }}</td>
                                <td>{{ $mahasiswa->kelas }}</td>
                                <td>{{ $mahasiswa->matakuliah }}</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('mahasiswa.edit', $mahasiswa->nim) }}" 
                                           class="btn btn-warning btn-sm">✏️ Edit</a>
                                        
                                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->nim) }}" 
                                              method="POST" 
                                              class="d-inline"
                                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">🗑️ Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    <h5>📭 Data mahasiswa belum tersedia</h5>
                                    <p class="mb-0">Silakan tambah data mahasiswa terlebih dahulu.</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>

        <div class="mt-4 text-muted">
            <small>Total Data: <strong>{{ $mahasiswas->count() }}</strong> mahasiswa</small>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Auto-hide alerts after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                const alerts = document.querySelectorAll('.alert');
                alerts.forEach(alert => {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                });
            }, 5000);
        });
        <!-- Di dalam tabel, kolom Aksi -->
<td class="text-center">
    <div class="btn-group" role="group">
        <a href="{{ route('mahasiswa.edit', $mahasiswa->nim) }}" 
           class="btn btn-warning btn-sm me-1">✏️ Edit</a>
        
        <form action="{{ route('mahasiswa.destroy', $mahasiswa->nim) }}" 
              method="POST" 
              class="d-inline"
              onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">🗑️ Hapus</button>
        </form>
    </div>
</td>
    </script>
</body>

</html>

