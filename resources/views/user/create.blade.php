@extends('layouts.app')
  
@section('title', 'Create Users')
  
@section('contents')
    <h1 class="mb-0">Add Users</h1>
    <hr />
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama">
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