@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id_barang) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Title" value="{{ old('nama', $product->nama) }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Gambar</label>
                <img src="{{ asset('uploads/'.$product->image) }}" alt="Product Image" class="img-fluid mb-2" style="max-height: 150px">
                <input type="file" name="image" class="form-control">
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Stok</label>
                <input type="text" name="stok" class="form-control" placeholder="Price" value="{{ old('stok', $product->stok) }}">
            </div>
            <div class="col">
                <label class="form-label">Harga</label>
                <input type="text" name="harga" class="form-control" placeholder="Product Code" value="{{ old('harga', $product->harga) }}">
            </div>
        </div>

        <!-- Input tersembunyi untuk menyimpan ID kategori -->
        <input type="hidden" name="kategori_id" value="{{ $product->kategori_id }}">

        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
