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
                    <label for="nama" class="form-label">ID Transaksi</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $transaksi->id }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">Tanggal Transaksi</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $transaksi->tgl_beli }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama Pelanggan</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $transaksi->pelanggan->nama_pelanggan }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $transaksi->product->nama }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">Kategori</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $transaksi->kategori->jenis }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">Jenis Kelamin</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $transaksi->pelanggan->jenis_kelamin }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nomor Handpone</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $transaksi->pelanggan->nomor_handpone }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">Alamat Pelanggan</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $transaksi->pelanggan->alamat }}" readonly>
                </div>
            </div>
        </div>
    </div>
@endsection
