@extends('layouts.app')

@section('title', 'Halaman Mahasiswa')

@section('content')
     <!-- Kode ditulis didalam content(Disini) -->
     
     <div class="container my-4"> 
        <h1 class="mb-3">Daftar Mahasiswa</h1>
                
        <p class="mb-3">Selamat datang, <strong>admin</strong>. Berikut daftar mahasiswa:</p>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-0">
                        <thead class="thead-dark" style="background-color: #212529; color: white;">
                            <tr>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Program Studi</th>
                                <th scope="col">SKS</th>
                                <th scope="col">IPK</th>
                                <th scope="col">Status</th>
                                <th scope="col">Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @forelse($data_mahasiswa as $mahasiswa)
                                <tr>
                                    <td>{{ $mahasiswa['nim'] }}</td>
                                    <td>{{ $mahasiswa['nama'] }}</td>
                                    <td>{{ $mahasiswa['prodi'] }}</td>
                                    <td>{{ $mahasiswa['sks'] }}</td>
                                    
                                    <td>{{ number_format($mahasiswa['ipk'], 2) }}</td>
                                    <td>
                                        
                                        @if($mahasiswa['status'] == 'Lulus')
                                            <span class="badge bg-success">{{ $mahasiswa['status'] }}</span>
                                        @else
                                            <span class="badge bg-danger">{{ $mahasiswa['status'] }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        
                                        @switch($mahasiswa['kategori'])
                                            @case('Mahasiswa Akhir')
                                                <span class="badge bg-info text-dark">{{ $mahasiswa['kategori'] }}</span>
                                                @break
                                            @case('Mahasiswa Madya')
                                                <span class="badge bg-warning text-dark">{{ $mahasiswa['kategori'] }}</span>
                                                @break
                                            @case('Mahasiswa Baru')
                                                <span class="badge bg-primary">{{ $mahasiswa['kategori'] }}</span>
                                                @break
                                            @default
                                                <span class="badge bg-secondary">{{ $mahasiswa['kategori'] }}</span>
                                        @endswitch
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Data mahasiswa tidak ditemukan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
     </div>
@endsection