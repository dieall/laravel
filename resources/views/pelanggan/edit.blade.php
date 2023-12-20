@extends('layouts.app')
  
@section('title', 'Edit Pelanggan')
  
@section('contents')
    <h1 class="mb-0">Edit Pelanggan</h1>
    <hr />
    <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">ID Pelanggan</label>
                <input type="text" name="id" class="form-control" placeholder="id" value="{{ $pelanggan->id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan" value="{{ $pelanggan->nama_pelanggan }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" value="{{ $pelanggan->jenis_kelamin }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nomor Handpone</label>
                <input type="text" name="nomor_handpone" class="form-control" placeholder="Nomor Handpone" value="{{ $pelanggan->nomor_handpone }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $pelanggan->alamat }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection