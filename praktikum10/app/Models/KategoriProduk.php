<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;

    //hubungin dengan table kategori_produk
    protected $table = 'kategori_produk';

    // tentuin kolom yang bisa diisi
    protected $fillable = [
        'nama',
    ];

    // buat fungsi relasi one to many : hasMany
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
