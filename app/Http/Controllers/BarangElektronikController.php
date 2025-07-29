<?php

namespace App\Http\Controllers;

use App\Models\BarangElektronik;
use Illuminate\Http\Request;

class BarangElektronikController extends Controller
{
    public function index(Request $request)
    {
        $query = BarangElektronik::query();

        if ($request->has('search')) {
            $query->where('nama_barang', 'like', "%{$request->search}%")
                  ->orWhere('kode_barang', 'like', "%{$request->search}%");
        }

        $barang = $query->paginate(10);
        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|unique:barang_elektronik',
            'kode_barang' => 'required|unique:barang_elektronik',
            'kategori' => 'required',
            'tahun_pembelian' => 'required|integer|min:2000|max:' . date('Y'),
            'kondisi' => 'required|in:Baik,Rusak Ringan,Rusak Berat',
            'jumlah' => 'required|integer|min:1',
            'lokasi_penyimpanan' => 'required',
        ]);

        BarangElektronik::create($request->all());

        return redirect()->route('barang.index')->with('success', 'Data berhasil disimpan.');
    }

    public function edit(BarangElektronik $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, BarangElektronik $barang)
    {
        $request->validate([
            'nama_barang' => 'required|unique:barang_elektronik,nama_barang,' . $barang->id,
            'kode_barang' => 'required|unique:barang_elektronik,kode_barang,' . $barang->id,
            'kategori' => 'required',
            'tahun_pembelian' => 'required|integer|min:2000|max:' . date('Y'),
            'kondisi' => 'required|in:Baik,Rusak Ringan,Rusak Berat',
            'jumlah' => 'required|integer|min:1',
            'lokasi_penyimpanan' => 'required',
        ]);

        $barang->update($request->all());

        return redirect()->route('barang.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(BarangElektronik $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Data berhasil dihapus.');
    }
}
