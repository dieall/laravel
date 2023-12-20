<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'nama',
        'harga',
        'kategori_id',
        'stok'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
