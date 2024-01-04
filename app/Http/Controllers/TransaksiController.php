<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Product;
use App\Models\Kategori;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::with('product', 'kategori', 'pelanggan')->orderBy('created_at', 'DESC')->get();

        return view('transaksi.index', compact('transaksi'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        $pelanggans = Pelanggan::all();
        $categories = Kategori::all();
    
        return view('transaksi.create', compact('products', 'pelanggans', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    

     public function store(Request $request)
{
    // Validasi request jika diperlukan
    $validatedData = $request->validate([
        'tgl_beli' => 'required|date',
        'id_barang' => 'required',
        'kategori_id' => 'required',
        'id_pelanggan' => 'required',
    ]);

    // Simpan data ke dalam database
    $transaksi = new Transaksi([
        'tgl_beli' => $validatedData['tgl_beli'],
        'id_barang' => $validatedData['id_barang'],
        'kategori_id' => $validatedData['kategori_id'],
        'id_pelanggan' => $validatedData['id_pelanggan'],
        // tambahkan kolom-kolom lain sesuai kebutuhan
    ]);

    $transaksi->save();

    return redirect()->route('transaksi')->with('success', 'Transaksi berhasil disimpan');
    }

    public function show(string $id)
    {
        $pelanggans = Pelanggan::all();
        $categories = Kategori::all();
        $product    = Product::all();
        $transaksi  = Transaksi::findOrFail($id); // Ganti dengan model transaksi yang sesuai
        
        return view('transaksi.show', compact('transaksi'));
    }
    
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_barang)
    {
        $categories = Kategori::all();
        $product = Product::findOrFail($id_barang);
  
        return view('products.edit', compact('product','categories'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_barang)
    {
    
        $product = Product::findOrFail($id_barang);
  
        $product->update($request->all());
  
        return redirect()->route('products')->with('success', 'product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_barang)
    {
        $product = Product::findOrFail($id_barang);
  
        $product->delete();
  
        return redirect()->route('products')->with('success', 'product deleted successfully');
    }

}