@extends('layouts.app')

@section('title', 'Create Kategori')

@section('contents')


        <!-- Page Heading -->
        <h1 class="h3 mb-4">Add Pelanggan</h1>
        <hr />

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('pelanggan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="jenis" class="form-label">Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" class="form-control" id="nama_pelanggan" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" placeholder="Jenis Kelamin">
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Nomor Handpone</label>
                        <input type="text" name="nomor_handpone" class="form-control" id="nomor_handpone" placeholder="+62">
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

@endsection
