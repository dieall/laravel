@extends('layouts.app')
  
@section('title', 'Create Product')
  
@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="row mb-3">
                <select class="form-control select2" name="kategori_id" id="kategori_id">
                <option disabled value>Pilih Kategori</option>
                @foreach ($categories as $rs)
                <option value="{{ $rs->id }}">{{ $rs->jenis }}</option>
                @endforeach
                </select>
            </div>
            <div class="col">
                <input type="text" name="stok" class="form-control" placeholder="stok">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="harga" class="form-control" placeholder="Harga">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection