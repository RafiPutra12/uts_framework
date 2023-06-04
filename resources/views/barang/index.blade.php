@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h2 class="mb-3">{{ $pageTitle }}</h2>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('barang.create') }}" class="btn btn-dark">Tambah Barang</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-dark table-bordered table-hover mb-0">
                <caption>List of barang</caption>
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Satuan</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                        <tr class="table-active">
                            <td>{{ $barang->kode_barang }}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->deskripsi_barang }}</td>
                            <td>{{ $barang->harga_barang }}</td>
                            <td>{{ $barang->satuan->nama_satuan }}</td>
                            <td>@include('barang.actions')</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
