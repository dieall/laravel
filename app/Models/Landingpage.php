<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Landingpage extends Model
{
    protected $table = "transaksi";
    protected $fillable = ['tgl_beli', 'id_barang', 'kategori_id', 'id_pelanggan'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_barang');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }
}
