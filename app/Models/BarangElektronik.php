<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangElektronik extends Model
{
    use HasFactory;

    /**
     * Force table name to match database table
     */
    protected $table = 'barang_elektronik';

    // Kalau pakai mass-assignment, aktifkan fillable:
    protected $fillable = [
        'nama_barang',
        'kode_barang',
        'kategori',
        'merk',
        'model',
        'tahun_pembelian',
        'kondisi',
        'jumlah',
        'lokasi_penyimpanan',
        'keterangan',
    ];
}
