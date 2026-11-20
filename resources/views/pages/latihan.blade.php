@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Daftar produk kami</h2>
    
    <button class="btn btn-primary mb-3">Tambah Data</button>

    <div class="card">
        <div class="card-header">
            Produk Kami
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($matakuliah as $index => $matkul)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $matkul[0] }}</td>
                        <td>{{ $matkul[1] }}</td>
                        <td>Rp. {{ number_format($matkul[2], 0, ',', '.') }}</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Delete</button>
                            <button class="btn btn-warning btn-sm">Edit</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection