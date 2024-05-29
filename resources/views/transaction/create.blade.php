@extends('layouts.master')

@section('content')
<form class="card" action="{!! route('transactions.store') !!}" method="POST">
    @csrf
    <div class="card-header">
        <div class="row">
            <div class="col-sm-6">
                Halaman Tambah Transaksi Produk
            </div>
        </div>
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {!! Session::get('success') !!}
        </div>
    @endif
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="mb-3">
                    <label for="customer_name" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="member_name" name="member_name" placeholder="Nama Pelanggan">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="mb-3">
                    <label for="customer_name" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="member_email" name="member_email" placeholder="Email Pelanggan">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="mb-3">
                    <label for="customer_name" class="form-label">Nama Pelanggan</label>
                    <input type="date" class="form-control" id="transaction_date" name="transaction_date" placeholder="Tanggal Transaksi" value="{!! Date('Y-m-d') !!}">
                </div>
            </div>
        </div>
        <hr>
        
        @foreach ($products as $i => $product)
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class="mb-3">
                        <label for="selling_price" class="form-label">Produk</label>
                        <input type="text" class="form-control" id="product_name" name="products[{{ $i }}][product_name]" placeholder="Harga Jual" value="{!! $product->name !!}" readonly>
                        <input type="hidden" id="product_id" name="products[{{ $i }}][product_id]" value="{!! $product->id !!}" readonly>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="mb-3">
                        <label for="selling_price" class="form-label">Harga Satuan</label>
                        <input type="text" class="form-control" id="selling_price" name="products[{!! $i!!}][selling_price]" placeholder="Harga Jual" value="{!! $product->selling_price !!} / {!! $product->unit !!}" readonly>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="mb-3">
                        <label for="qty" class="form-label">Jumlah Pembelian</label>
                        <input type="text" class="form-control" id="qty" name="products[{!! $i !!}][qty]" placeholder="Jumlah Dibeli" value="0">
                    </div>
                </div>
            </div>
        @endforeach
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