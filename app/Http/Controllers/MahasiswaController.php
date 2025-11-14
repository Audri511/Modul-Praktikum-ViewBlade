<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Menampilkan halaman daftar mahasiswa.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Data dummy untuk mahasiswa, sesuai dengan gambar
        $data_mahasiswa = [
            [
                'nim' => '120221001',
                'nama' => 'Andi 🌟',
                'prodi' => 'Teknologi Informasi',
                'sks' => 150,
                'ipk' => 3.80,
                'status' => 'Lulus',
                'kategori' => 'Mahasiswa Akhir',
            ],
            [
                'nim' => '120221002',
                'nama' => 'Budi',
                'prodi' => 'Sistem Informasi',
                'sks' => 90,
                'ipk' => 3.50,
                'status' => 'Belum Lulus',
                'kategori' => 'Mahasiswa Madya',
            ],
            [
                'nim' => '120221003',
                'nama' => 'Citra',
                'prodi' => 'Rekayasa Perangkat Lunak',
                'sks' => 70,
                'ipk' => 3.20,
                'status' => 'Belum Lulus',
                'kategori' => 'Mahasiswa Baru',
            ],
            [
                'nim' => '120221004',
                'nama' => 'Dewi 🌟',
                'prodi' => 'Teknik Elektro',
                'sks' => 140,
                'ipk' => 3.90,
                'status' => 'Belum Lulus',
                'kategori' => 'Mahasiswa Akhir',
            ],
        ];

        // Mengirim data ke view 'mahasiswa.index'
        // Pastikan file blade Anda ada di resources/views/mahasiswa/index.blade.php
        return view('index', compact('data_mahasiswa'));
    }
}