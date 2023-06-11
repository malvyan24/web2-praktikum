<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    use HasFactory;

    //hungin dengan table produk
    protected $table = 'produk';

    //ubah timestamps jadi fale
    public $timestamps = false;

    // tentuin kolom yang bisa diisi
    protected $fillable = [
        'kode',
        'nama',
        'harga_jual',
        'harga_beli',
        'stok',
        'min_stok',
        'deskripsi',
        'kategori_produk_id',
    ];

    // buat fungsi relasi ke tabel kategori_produk
    public function kategori_produk()
    {
        return $this->belongsTo(KategoriProduk::class);
    }

    // buat fungsi untuk nampilin data
    public static function getAllProduk(){
        // return Produk::with('kategori_produk')->get();

        //bikin query nampilin nama kategori
        $alldata = DB::table('produk')

        ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
        ->select('produk.*', 'kategori_produk.nama as nama_kategori')
        ->get();

        return $alldata;
    }
    
}
