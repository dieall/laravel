<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $fillable = [
        'nama_pelanggan',
        'jenis_kelamin',
        'nomor_handpone',
        'alamat'
    ];
}
