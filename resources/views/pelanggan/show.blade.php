@extends('layouts.app')
  
@section('title', 'Show pelanggan')
  
@section('contents')
    <h1 class="mb-0">Detail pelanggan</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ID pelanggan</label>
            <input type="text" name="id_pelanggan" class="form-control" placeholder="id" value="{{ $pelanggan->id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control" placeholder="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" placeholder="jenis_kelamin" value="{{ $pelanggan->jenis_kelamin }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nomor Handpone</label>
            <input type="text" name="nomor_handpone" class="form-control" placeholder="nomor_handpone" value="{{ $pelanggan->nomor_handpone }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="alamat" value="{{ $pelanggan->alamat }}" readonly>
        </div>
    </div>

@endsection