@extends('layouts.master')

@section('content')
<form class="card" action="{!! route('product_categories.store') !!}" method="POST">
    @csrf
    <div class="card-header">
        <h3 class="card-tile">
            Tambah Kategori Produk
        </h3>
    </div>
    <div class="card-body">
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama Kategori Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Deskripsi Kategori Produk</label>
            <div class="col-sm-10">
                <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-lg-6 d-grid gap-2">
                <a href="{!! route('product_categories.index') !!}" class="btn btn-outline-secondary btn-block">Kembali</a>
            </div>
            <div class="col-lg-6 d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </div>
        </div>
    </div>
</form>
@endsection