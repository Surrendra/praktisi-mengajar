@extends('layouts.master')

@section('content')
<form class="card" action="{!! route('products.update',$product->id) !!}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-header">
        <h3 class="card-tile">
            Tambah Kategori Produk
        </h3>
    </div>
    <div class="card-body">
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
                <select name="product_category_id" id="product_category_id" class="form-control">
                    <option value="">Pilih Kategori Produk</option>
                    @foreach ($product_categories as $product_category)
                        @if ($product->product_category_id == $product_category->id)
                            <option value="{!! $product_category->id !!}" selected>{!! $product_category->name !!}</option>
                        @else
                            <option value="{!! $product_category->id !!}">{!! $product_category->name !!}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{!! $product->name !!}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Deskripsi Produk</label>
            <div class="col-sm-10">
                <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Unit</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="unit" name="unit" placeholder="Pcs, kartonm box, pallet" value="{!! $product->unit !!}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="selling_price" class="form-label">Harga Jual</label>
                            <input type="text" class="form-control" id="selling_price" name="selling_price" value="{!! $product->selling_price !!}" placeholder="Harga Jual" value="0">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="purchase_price" class="form-label">Harga Beli</label>
                            <input type="text" class="form-control" id="purchase_price" name="purchase_price" value="{!! $product->purchase_price !!}" placeholder="Harga Beli" value="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="minimal_stock" class="form-label">Minimal Stok</label>
                            <input type="text" class="form-control" id="minimal_stock" name="minimal_stock" value="{!! $product->minimal_stock !!}" placeholder="Harga Jual" value="0">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="maximal_stock" class="form-label">Maximal Stok</label>
                            <input type="text" class="form-control" id="maximal_stock" name="maximal_stock" value="{!! $product->maximal_stock !!}" placeholder="Harga Beli" value="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-lg-6 d-grid gap-2">
                <a href="{!! route('products.index') !!}" class="btn btn-outline-secondary btn-block">Kembali</a>
            </div>
            <div class="col-lg-6 d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </div>
        </div>
    </div>
</form>
@endsection