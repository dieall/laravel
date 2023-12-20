@extends('layouts.app')
  
@section('title', 'Show Kategori')
  
@section('contents')
    <h1 class="mb-0">Detail Kategori</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ID Kategori</label>
            <input type="text" name="id" class="form-control" placeholder="id" value="{{ $kategori->id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jenis Kategori</label>
            <input type="text" name="jenis" class="form-control" placeholder="Jenis" value="{{ $kategori->jenis }}" readonly>
        </div>
    </div>

@endsection