@extends('layouts.master')

@section('content')
<div class="card mt-1"> 
    <div class="card-header">
        <div class="row">
            <div class="col-sm-6">
                <a href="{!! route('transactions.create') !!}" class="btn btn-primary">
                    Tambah Transaksi Produk
                </a>
            </div>
            <div class="col-sm-6">
                Halaman Transaksi Produk
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
                    <th>Nama Member</th>
                    <th>Email Member</th>
                    <th>Tanggal Transaksi</th>
                    <th>Subtotal</th>
                    <th>Diskon</th>
                    <th>Grand Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Aksi
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <form action="{!! route('product_categories.destroy',$transaction->id) !!}" method="POST">
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
                        <td>{!! $transaction->member_name !!}</td>
                        <td>{!! $transaction->member_email !!}</td>
                        <td>{!! $transaction->transaction_date !!}</td>
                        <td>{!! $transaction->subtotal !!}</td>
                        <td>{!! $transaction->discount !!}</td>
                        <td>{!! $transaction->total !!}</td>
                        <td>{!! $transaction->updated_at !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection