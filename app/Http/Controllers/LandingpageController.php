<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LandingpageController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('landingpage', compact('products'));
    }
    public function beli(Request $request, Product $product)
    {
        // Mengambil data semua produk dari model Product
        $products = Product::all();
    
        // Logika pembelian dapat ditambahkan di sini
        // Contoh sederhana: menampilkan nama produk yang dibeli
        $message = "Anda telah membeli produk: " . $product->name;
    
        // Menggunakan view untuk menampilkan pesan, detail produk, dan daftar semua produk
        return view('products.beli', compact('product', 'message', 'products'));
    }
    
}