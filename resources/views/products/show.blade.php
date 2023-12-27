@extends('layouts.app')
  
@section('title', 'Show Product')
  
@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Product</h6>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $product->nama }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="stok" class="form-label">Stok:</label>
                    <input type="text" name="stok" class="form-control" placeholder="Stok" value="{{ $product->stok }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="harga" class="form-label">Harga:</label>
                    <input type="text" name="harga" class="form-control" placeholder="Harga" value="{{ $product->harga }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label">Gambar:</label>
                    <img src="{{ asset('uploads/'.$product->image) }}" alt="Product Image" class="img-fluid" width="100">
                </div>
            </div>
        </div>
    </div>
@endsection
