@extends('layouts.app')

@section('title', 'Edit Transaksi')

@section('contents')
    <h1 class="mb-0">Edit Transaksi</h1>
    <hr />
    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Tanggal Beli</label>
                <input type="date" name="tgl_beli" class="form-control" placeholder="Tanggal Beli" value="{{ old('tgl_beli', $transaksi->tgl_beli) }}">
            </div>
        </div>

        <div class="mb-3">
            <label for="kategori_id" class="form-label">Kategori</label>
            <select class="form-control select2" name="kategori_id" id="kategori_id">
                <option value="" disabled selected>Pilih Kategori</option>
                @foreach ($categories as $rs)
                    <option value="{{ $rs->id }}" @if(old('kategori_id', $transaksi->kategori_id) == $rs->id) selected @endif>{{ $rs->jenis }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
    <label for="id_barang" class="form-label">Nama Barang</label>
    <select class="form-control select2" name="id_barang" id="id_barang">
        <option value="" disabled selected>Pilih Barang</option>
        @foreach ($products as $rs)
            <option value="{{ $rs->id_barang }}" @if(old('id_barang', $transaksi->id_barang) == $rs->id) selected @endif>{{ $rs->nama }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="id_pelanggan" class="form-label">Nama Pelanggan</label>
    <select class="form-control select2" name="id_pelanggan" id="id_pelanggan">
        <option value="" disabled selected>Pilih Pelanggan</option>
        @foreach ($pelanggans as $rs)
            <option value="{{ $rs->id_pelanggan }}" @if(old('id_pelanggan', $transaksi->id_pelanggan) == $rs->id_pelanggan) selected @endif>{{ $rs->nama_pelanggan }}</option>
        @endforeach
    </select>
</div>

        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
