@extends('layouts.app')
  
@section('title', 'Show Product')
  
@section('contents')
    <h1 class="mb-0">Detail Product</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $product->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Stok</label>
            <input type="text" name="stok" class="form-control" placeholder="Price" value="{{ $product->stok }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control" placeholder="Product Code" value="{{ $product->harga }}" readonly>
        </div>
    </div>

@endsection