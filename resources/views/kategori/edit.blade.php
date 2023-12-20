@extends('layouts.app')
  
@section('title', 'Edit Kategori')
  
@section('contents')
    <h1 class="mb-0">Edit Kategori</h1>
    <hr />
    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">ID Kategori</label>
                <input type="text" name="id" class="form-control" placeholder="id" value="{{ $kategori->id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Jenis Kategori</label>
                <input type="text" name="jenis" class="form-control" placeholder="jenis" value="{{ $kategori->jenis }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection