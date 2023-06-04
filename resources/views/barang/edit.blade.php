@extends('layout')

@section('content')
    <div class="container-sm my-5">
        <form action="{{ route('barang.update', ['barang' => $barang->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi bi-bag-fill fs-1"></i>
                        <h4>Edit Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kode_brg" class="form-label">Kode Barang</label>
                            <input class="form-control" type="text" name="kode_brg" id="kode_brg" value="{{ $barang->kode_barang }}" placeholder="Masukkan Kode Barang">

                            @if (count($errors) > 0)
                                <div style="width: auto; color: #dc4c64; margin-top: 0.25rem;">
                                    {{ $errors->first('kode_brg') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nama" class="form-label">Nama Barang</label>
                            <input class="form-control" type="text" name="nama" id="nama" value="{{ $barang->nama_barang }}" placeholder="Masukkan Nama Barang">

                            @if (count($errors) > 0)
                                <div style="width: auto; color: #dc4c64; margin-top: 0.25rem;">
                                    {{ $errors->first('nama') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input class="form-control" type="text" name="deskripsi" id="deskripsi" value="{{ $barang->deskripsi_barang }}" placeholder="Masukkan Deskripsi">

                            @if (count($errors) > 0)
                                <div style="width: auto; color: #dc4c64; margin-top: 0.25rem;">
                                    {{ $errors->first('deskripsi') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input class="form-control" type="text" name="harga" id="harga" value="{{ $barang->harga_barang }}" placeholder="Masukkan Harga Barang">

                            @if (count($errors) > 0)
                                <div style="width: auto; color: #dc4c64; margin-top: 0.25rem;">
                                    {{ $errors->first('harga') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="satuan" class="form-label">Satuan</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @php
                                    $selected = "";
                                    if ($errors->any())
                                        $selected = old('satuan');
                                    else
                                        $selected = $barang->satuan_id;
                                @endphp

                                @foreach ($satuan as $satuan)
                                    <option value="{{ $satuan->id }}" {{ $selected == $satuan->id ? 'selected' : '' }}>{{ $satuan->kode_satuan.' - '.$satuan->nama_satuan }}</option>
                                @endforeach
                            </select>
                            @error('satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
