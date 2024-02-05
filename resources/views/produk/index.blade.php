@extends('layout.master')

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with minimal features & hover style</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <a href="/produk-tambah" class="btn btn-success">Tambah +</a>
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
            @php
               $no = 1;
            @endphp
            @foreach ($data as $row)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$row->nama_produk}}</td>
                <td>{{$row->harga}}</td>
                <td>{{$row->stok}}</td>
                <td>{{$row->deskripsi}}</td>
                <td>
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection
