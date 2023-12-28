<?php

namespace App\Http\Controllers;

use App\Models\Product; // Gantilah Product dengan model yang sesuai


class LandingpageController extends Controller
{
    public function index()
    {
        // Mengambil data produk dari model Product
        $products = Product::all();

        // Menyatukan data produk ke dalam view 'landingpage' dan mengirimkannya sebagai variabel 'products'
        return view('landingpage', compact('products'));
    }
}
