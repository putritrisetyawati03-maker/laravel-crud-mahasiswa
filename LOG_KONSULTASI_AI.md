# LOG KONSULTASI AI - CRUD MAHASISWA LARAVEL 12

## **Informasi Proyek**
- **Nama Proyek:** CRUD Mahasiswa dengan Laravel 12
- **Tujuan:** Implementasi sistem CRUD (Create, Read, Update, Delete) untuk data mahasiswa
- **Tanggal Pengerjaan:** 7 Februari 2026
- **Nama Mahasiswa:** Putri Trisetyawati
- **NIM:** [43240462]
- **Mata Kuliah:** Pemrograman Web Lanjut

## **Konsultasi dengan DeepSeek**

### **1. Pembuatan Migration Tabel Mahasiswa**
**Prompt:** "Saya ingin membuat tabel 'mahasiswas' di Laravel 12 dengan field: nim (string, primary), nama (string), kelas (string), dan matakuliah (string). Tolong buatkan kode fungsi up() pada file migration-nya."

**Tanggal:** 7 Februari 2026  
**Tujuan:** Membuat struktur tabel database untuk menyimpan data mahasiswa

**Hasil dari AI:**
```php
public function up(): void
{
    Schema::create('mahasiswas', function (Blueprint $table) {
        $table->string('nim')->primary();
        $table->string('nama');
        $table->string('kelas');
        $table->string('matakuliah');
        $table->timestamps();
    });
}
