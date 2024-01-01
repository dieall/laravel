<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';

    protected $primaryKey = "id_pelanggan";
    
    protected $fillable = [
        'nama_pelanggan',
        'jenis_kelamin',
        'nomor_handpone',
        'alamat'
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_pelanggan');
    }
}
