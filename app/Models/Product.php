<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   
    protected $table = "products";
    protected $primaryKey = "id_barang";
    protected $fillable = [
        'nama',
        'harga',
        'kategori_id',
        'image',
        'stok'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    
}
