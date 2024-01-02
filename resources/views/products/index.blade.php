@extends('layouts.app')
  
@section('title', 'Data Barang')
  
@section('contents')
    <!-- Page Heading and Add Product Button -->
    <div class="d-flex justify-content-between align-items-center">
    <hr>
        <h1 class="h3 mb-2 text-gray-800"></h1>
        <div>
        @if(Auth::user() && Auth::user()->level == 'Admin')
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add Product</a>
        @endif
        </div>
    </div>
    
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Nama Barang</th>
                            <th>Jenis</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($products->count() > 0)
                            @foreach($products as $rs)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle"><img src="{{ asset('uploads/'.$rs->image) }}" alt="" width="100"></td>
                                    <td class="align-middle">{{ $rs->nama }}</td>
                                    <td class="align-middle">{{ $rs->kategori->jenis }}</td>
                                    <td class="align-middle">{{ $rs->stok }}</td>
                                    <td class="align-middle">{{ $rs->harga }}</td>
                                    <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
    <a href="{{ route('products.show', $rs->id_barang) }}" type="button" class="btn btn-secondary mr-2">
        <i class="fas fa-eye"></i> 
    </a>
    @if(Auth::user() && Auth::user()->level == 'Admin')
    <a href="{{ route('products.edit', $rs->id_barang)}}" type="button" class="btn btn-warning mr-2">
        <i class="fas fa-edit"></i> 
    </a>
    <form action="{{ route('products.destroy', $rs->id_barang) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">
            <i class="fas fa-trash-alt"></i> 
        </button>
        @endif
    </form>
</div>



                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="6">Product not found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
