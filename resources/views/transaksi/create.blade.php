@extends('layouts.app')


@section('contents')
    <div class="card shadow mb-4">
        <div class="card-body">
            <hr>

            <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="tgl_beli" class="form-label">Tanggal Pembelian</label>
                    <input type="date" name="tgl_beli" class="form-control" placeholder="Masukkan Nama">
                </div>

                <div class="mb-3">
                    <label for="kategori_id" class="form-label">Kategori</label>
                    <select class="form-control select2" name="kategori_id" id="kategori_id">
                        <option disabled value>Pilih Kategori</option>
                        @foreach ($categories as $rs)
                            <option value="{{ $rs->id }}">{{ $rs->jenis }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_barang" class="form-label">Nama Barang</label>
                    <select class="form-control select2" name="id_barang" id="id_barang">
                        <option disabled value>Pilih Kategori</option>
                        @foreach ($products as $rs)
                            <option value="{{ $rs->id_barang }}">{{ $rs->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_pelanggan" class="form-label">Nama Pelanggan</label>
                    <select class="form-control select2" name="id_pelanggan" id="id_pelanggan">
                        <option disabled value>Pilih Kategori</option>
                        @foreach ($pelanggans as $rs)
                            <option value="{{ $rs->id_pelanggan }}">{{ $rs->nama_pelanggan }}</option>
                        @endforeach
                    </select>
                </div>

    
                <div class="row">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
