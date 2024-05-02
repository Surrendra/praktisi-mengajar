@extends('layouts.master')

@section('content')
<div class="card mt-1"> 
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
                        <td></td>
                        <td>{{ $product->productCategory->name }}</td>
                        <td>{!! $product->name !!}</td>
                        <td>{!! $product->description !!}</td>
                        <td>{!! $product->minimal_stock !!}</td>
                        <td>{!! $product->maximal_stock !!}</td>
                        <td>{!! $product->purchase_price !!}</td>
                        <td>{!! $product->selling_price !!}</td>
                        <td>{!! $product->created_at !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection