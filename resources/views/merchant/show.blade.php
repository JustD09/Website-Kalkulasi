@extends('layouts.app')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Seluruh merchant</h4>
                <div class="form-group">
                    <label for="nama_merchant">Nama Merchant</label>
                    <input name="nama_merchant" type="text" class="form-control" id="nama_merchant" disabled value="{{ $merchant->nama_merchant}}">
                </div>
                <div class="form-group">
                        <label for="tanggal">Tanggal Data</label>
                        <input name="tanggal" type="text" class="form-control" id="tanggal" disabled value="{{ $merchant->order}}">
                    </div>
                <div class="form-group">
                    <label for="order">Jumlah Orderan Mingguan</label>
                    <input name="order" type="text" class="form-control" id="order"
                        disabled value="{{ $merchant->order}}">
                </div>
                <div class="form-group">
                    <label for="rating">Rating Outlet Merchant</label>
                    <input name="rating" type="text" class="form-control" id="rating"
                        disabled value="{{ $merchant->rating}}">
                </div>
                <div class="form-group">
                    <label for="harga_jual">Rata Rata Harga Jual</label>
                    <input name="harga_jual" type="text" class="form-control" id="harga_jual"
                        disabled value="{{ $merchant->harga_jual}}">
                </div>
                <div class="form-group">
                    <label for="delivery">Waktu Pengiriman</label>
                    <input name="delivery" type="text" class="form-control" id="delivery"
                        disabled value="{{ $merchant->delivery}}">
                </div>
                <div class="form-group">
                    <label for="weight_order">Bobot Nilai Yang Sudah Di Hitung</label>
                    <input name="weight_order" type="text" class="form-control" id="weight_order"
                        disabled value="{{ $merchant->weight_order}}">
                </div>
                <div class="form-group">
                    <label for="promo">Promo</label>
                    <input name="promo" type="text" class="form-control" id="promo"
                        disabled value="{{ $merchant->promo}}%">
                </div>
            </div>
        </div>
    </div>
@endsection
