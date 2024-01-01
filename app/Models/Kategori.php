<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";
    protected $primaryKey = "id";
    protected $fillable = ['id','jenis'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
