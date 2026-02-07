<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Mahasiswa</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #ffd6e8, #ffeaf3);
        }

        .card {
            width: 420px;
            margin: 60px auto;
            background: #fff;
            padding: 25px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(255,105,180,0.25);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .photo {
            text-align: center;
        }

        img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #ff69b4;
            margin-bottom: 15px;
        }

        h1 {
            text-align: center;
            color: #ff4d94;
            margin-bottom: 10px;
        }

        hr {
            border: none;
            height: 2px;
            background: #ffc1dc;
            margin-bottom: 15px;
        }

        .data p {
            background: #fff0f6;
            padding: 8px 12px;
            border-radius: 8px;
            margin: 8px 0;
        }

        strong {
            color: #d63384;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="photo">
            <img src="{{('foto.jpg') }}" alt="Foto Profil">
        </div>

        <h1>Profil Mahasiswa</h1>
        <hr>

        <div class="data">
            <p><strong>Nama :</strong> Putri Tri Setyawati</p>
            <p><strong>NIM :</strong> 43240462</p>
            <p><strong>Program Studi :</strong> Sistem Informasi</p>
            <p><strong>Mata Kuliah :</strong> Pemrograman Web Lanjut</p>
            <p><strong>Tahun Akademik :</strong> 2025/2026</p>
        </div>
    </div>

</body>
</html>