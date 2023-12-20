@extends('layouts.app')

@section('title', 'Data Pelanggan')

@section('contents')
    <!-- Page Heading and Add Product Button -->
    <div class="d-flex justify-content-between align-items-center">
    <hr>
        <h1 class="h3 mb-2 text-gray-800"></h1>
        <div>
            <a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">Add Product</a>
        </div>
    </div>
    

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data pelanggan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Nomor Handpone</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($pelanggan->count() > 0)
                                @foreach($pelanggan as $rs)
                                    <tr>
                                        <td>{{ $rs->id }}</td>
                                        <td>{{ $rs->nama_pelanggan }}</td>
                                        <td>{{ $rs->jenis_kelamin }}</td>
                                        <td>{{ $rs->nomor_handpone }}</td>
                                        <td>{{ $rs->alamat }}</td>
                                        <td>
<div class="btn-group justify-content-end" role="group" aria-label="Basic example">
    <a href="{{ route('pelanggan.show', $rs->id) }}" class="btn btn-info">Detail</a>
    <a href="{{ route('pelanggan.edit', $rs->id)}}" class="btn btn-warning">Edit</a>
    <form action="{{ route('pelanggan.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>

                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" class="text-center">Category not found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
