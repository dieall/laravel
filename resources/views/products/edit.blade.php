@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Title" value="{{ $product->nama }}" >
            </div>
            <div class="row mb-3">
                <select class="form-control select2" name="kategori_id" id="kategori_id">
                <option disabled value>Pilih Kategori</option>
                <option value="{{ $product->kategori_id }}">{{ $product->jenis }}</option>
                @foreach ($categories as $rs)
                <option value="{{ $rs->id }}">{{ $rs->jenis }}</option>
                @endforeach
                </select>
            </div>
            <div class="col mb-3">
                <label class="form-label">Stok</label>
                <input type="text" name="stok" class="form-control" placeholder="Price" value="{{ $product->stok }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Harga</label>
                <input type="text" name="harga" class="form-control" placeholder="Product Code" value="{{ $product->harga }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection