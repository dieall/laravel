@extends('layouts.app')

@section('title', 'Create Kategori')

@section('contents')


        <!-- Page Heading -->
        <h1 class="h3 mb-4">Add Kategori</h1>
        <hr />

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis:</label>
                        <input type="text" name="jenis" class="form-control" id="jenis" placeholder="Enter Jenis">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

@endsection
