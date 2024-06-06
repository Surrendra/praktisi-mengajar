@extends('layouts.master')

@section('content')
<div class="card mt-5"> 
    <div class="card-header">
        <div class="row">
            <div class="col-sm-6">
                <a href="{!! route('products.create') !!}" class="btn btn-primary">
                    Tambah Produk
                </a>
            </div>
            <div class="col-sm-6">
                Halaman Produk
            </div>
        </div>
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {!! Session::get('success') !!}
        </div>
    @endif
    <div class="card-body">
        <table class="table table-striped table-borderd">
            <thead>
                <tr>
                    <th>Aksi</th>
                    <th>Kategori</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Min Stock</th>
                    <th>Max Stock</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Dibuat Pada</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Aksi
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{!! route('products.edit',$product->id) !!}">Edit</a>
                                    </li>
                                    <li>
                                        <form action="{!! route('products.destroy',$product->id) !!}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="dropdown-item" type="submit">
                                                Hapus
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td>{{ $product->productCategory->name }}</td>
                        <td>{!! $product->name !!}</td>
                        <td>{!! $product->description !!}</td>
                        <td>{!! $product->minimal_stock !!}</td>
                        <td>{!! $product->maximal_stock !!}</td>
                        <td>{!! $product->getReadablePurchasePriceAttribute() !!}</td>
                        <td>{!! $product->selling_price !!}</td>
                        <td>{!! $product->created_at !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection