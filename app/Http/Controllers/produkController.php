<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Ruangan;
use App\Models\Jenis;

class produkController extends Controller
{
    public function index_kategori(Kategori $kategori){
        return view('item', [
            "title"=>"Kategori",
            "produks" => $kategori->produks,
        ]);
    }

    public function show(Produk $produk){
        return view('produk', [
            "produk" => $produk
        ]);
    }

    public function index_ruangan(Ruangan $ruangan){
        return view('item', [
            "title"=>"Ruangan",
            "produks" => $ruangan->produks,
        ]);
    }

    public function index_jenis(Jenis $jenis){
        return view('item', [
            "title"=>"Jenis",
            "produks" => $jenis->produks,
        ]);
    }

}
