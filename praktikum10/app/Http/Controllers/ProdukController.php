<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // jalankan fungsi getAllProduk dari model 
        $produk = Produk::getAllProduk();

        // kirim data ke view produk
        return view('admin.produk.produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //simpan data tabel produk dari model
        $produk = Produk::all();
        // simpan data kaetgori dari model
        $kategori_produk = KategoriProduk::all();
        // kirim data ke view create
        return view('admin.produk.create',compact('produk','kategori_produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //fitur tambah daata/valdisai kirim data
        $produk = new produk;
        // akses kolom kode trs isi dengan data kolom input jode user
        $produk = new Produk;
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        //simpan data ke data base
        $produk -> save();
        //nampilin ke url produk
        return redirect('produk');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //ambil data kategori model
        $kategori_produk = KategoriProduk::all();
        //ambil data produk model berdasarkan id
        $produk = Produk::where('id', $id)->get;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //arahkan ke halama edit
        $kategori_produk = KategoriProduk::all();
        $produk = Produk::where('id', $id)->get();
        return view('admin.produk.edit', compact(
            'produk',
            'kategori_produk'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $produk = Produk::find($request->id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('produk');
    }

    /**
     * hapus data.
     */
    public function destroy($id)
    {
        // cari data berdasar kan id
        $produk = Produk::find($id);
        //delete data
        $produk->delete();
        //tampilin ke url produk
        return redirect('produk')->with('success', 'Produk berhasil dihapus');
    }
}
