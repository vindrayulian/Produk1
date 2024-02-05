@extends('layout.master')

@section('content')
<div class="card container-fluid">
    <h3 class="pt-3 pl-3">Create Data Produk</h3>
    <form action="/produk-create" method="post">
        @csrf
        <div class="row p-3">
            <div class="col-12">
                <label for="" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Stok</label>
                <input type="text" class="form-control" name="stok">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-success">Tambah</button>
                <a href="/produk" class="btn btn-outline-light">Kembali</a>
            </div>
        </div>
    </form>
</div>
@endsection
