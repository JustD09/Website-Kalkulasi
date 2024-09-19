@extends('layouts.app')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Penambahan Data</h4>
                <form action="{{ route('merchant.update', $merchant->id)}}" method="POST" enctype="multipart/form-data" class="forms-sample">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_merchant">Nama Merchant</label>
                        <input name="nama_merchant" type="text" class="form-control" id="nama_merchant" value="{{ $merchant->nama_merchant}}">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Data</label>
                        <input name="tanggal" type="datetime-local" class="form-control" id="tanggal" value="{{ $merchant->order}}">
                    </div>
                    <div class="form-group">
                        <label for="order">Jumlah Orderan Mingguan</label>
                        <input name="order" type="text" class="form-control" id="order" value="{{ $merchant->order}}">
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating Outlet Merchant</label>
                        <input name="rating" type="text" class="form-control" id="rating" value="{{ $merchant->rating}}">
                    </div>
                    <div class="form-group">
                        <label for="harga_jual">Rata Rata Harga Jual</label>
                        <input name="harga_jual" type="text" class="form-control" id="harga_jual" value="{{ $merchant->harga_jual}}">
                    </div>
                    <div class="form-group">
                        <label for="delivery">Waktu Pengiriman</label>
                        <input name="delivery" type="text" class="form-control" id="delivery" value="{{ $merchant->delivery}}">
                    </div>
                    <div class="form-group">
                        <label for="weight_order">Bobot Nilai Yang Sudah Di Hitung</label>
                        <input name="weight_order" type="text" class="form-control" id="weight_order" value="{{ $merchant->weight_order}}">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Update Laporan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
