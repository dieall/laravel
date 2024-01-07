<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Product;
use App\Models\Kategori;
use App\Models\Pelanggan;

class LandingpageController extends Controller
{
    public function index()
    {
        return view('landingpage');
    }
    

}
