<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Barang;
use App\Models\Satuan;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'List Barang';

        // ELOQUENT
        $barang = Barang::all();

        return view('barang.index', [
            'pageTitle' => $pageTitle,
            'barangs' => $barang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create barang';

        // ELOQUENT
        $satuan = Satuan::all();

        return view('barang.create', compact('pageTitle', 'satuan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_brg' => 'required|unique:barang,kode_barang|max:6',
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'satuan' => 'required',
        ],[
            'kode_brg' => 'Kode barang harus diisi!',
            'nama' => 'Nama barang harus diisi!',
            'harga' => 'Harga barang harus diisi!',
            'deskripsi' => 'Deskripsi barang harus diisi!',
            'satuan' => 'Satuan barang harus diisi!',
            'kode_brg.unique' => 'Kode barang sudah ada!',
            'harga.numeric' => 'Isi dengan angka!',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $kode_barang = $request->old('kode_brg');
        $nama_barang = $request->old('nama');
        $harga_barang = $request->old('harga');
        $deskripsi_barang = $request->old('deskripsi');
        $satuan_barang = $request->old('satuan');

        // ELOQUENT
        $barang = New barang;
        $barang->kode_barang = $request->kode_brg;
        $barang->nama_barang = $request->nama;
        $barang->harga_barang = $request->harga;
        $barang->deskripsi_barang = $request->deskripsi;
        $barang->satuan_barang = $request->satuan;
        $barang->save();

        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Detail Barang';

        // ELOQUENT
        $barang = Barang::find($id);

        return view('barang.show', compact('pageTitle', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Data Barang';

        // ELOQUENT
        $satuan = Satuan::all();
        $barang = Barang::find($id);

        //render view with post
        return view('barang.edit', compact('pageTitle', 'barang', 'satuan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'kode_brg' => 'required|unique:barang,kode_barang|max:6',
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'satuan' => 'required',
        ],[
            'kode_brg' => 'Kode barang harus diisi!',
            'nama' => 'Nama barang harus diisi!',
            'harga' => 'Harga barang harus diisi!',
            'deskripsi' => 'Deskripsi barang harus diisi!',
            'satuan' => 'Satuan barang harus diisi!',
            'kode_brg.unique' => 'Kode barang sudah ada!',
            'harga.numeric' => 'Isi dengan angka!',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $satuan_barang = $request->old('satuan');

        // ELOQUENT
        $barang = Barang::find($id);;
        $barang->kode_barang = $request->kode_brg;
        $barang->nama_barang = $request->nama;
        $barang->harga_barang = $request->harga;
        $barang->deskripsi_barang = $request->deskripsi;
        $barang->satuan_barang = $request->satuan;
        $barang->save();

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // ELOQUENT
        Barang::find($id)->delete();

        return redirect()->route('barang.index');
    }
}
