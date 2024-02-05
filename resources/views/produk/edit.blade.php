@extends('layout.master')

@section('content')
<div class="card container-fluid">
    <h3 class="pt-3 pl-3">Edit Data Produk</h3>
    <form action="/produk-update/{{ $data->id }}" method="post">
        @csrf
        <div class="row p-3">
            <div class="col-12">
                <label for="" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" value="{{ $data->nama_produk }}">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" value="{{ $data->harga }}">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Stok</label>
                <input type="text" class="form-control" name="stok" value="{{ $data->stok }}">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="" cols="30" rows="10">{{ $data->deskripsi }}</textarea>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-success">Edit</button>
                <a href="/produk" class="btn btn-outline-light">Kembali</a>
            </div>
        </div>
    </form>
</div>
@endsection
