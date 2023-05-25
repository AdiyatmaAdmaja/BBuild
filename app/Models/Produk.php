<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Produk extends Model
{
    use HasFactory;
    protected $guarded=['id','tanggal_masuk_barang'];
    protected $fillable=['nama_barang','kategori_id','ruangan_id','jenis_id','slug','harga_barang','jumlah_barang','deskripsi_barang'];
    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
    public function ruangan(){
        return $this->belongsTo(Ruangan::class);
    }
    public function jenis(){
        return $this->belongsTo(Jenis::class);
    }

    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
