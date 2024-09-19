@extends('layouts.app')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Penambahan Data Merchant</h4>
                <form action="{{ route('merchant.store')}}" method="POST" enctype="multipart/form-data" class="forms-sample">
                    @csrf
                    <div class="form-group">
                        <label for="nama_merchant">Nama Merchant</label>
                        <input name="nama_merchant" type="text" class="form-control" id="nama_merchant" placeholder="Nama Merchant">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Data</label>
                        <input name="tanggal" type="datetime-local" class="form-control" id="tanggal" placeholder="Nama Merchant">
                    </div>
                    <div class="form-group">
                        <label for="order">Jumlah Orderan Mingguan</label>
                        <input name="order" type="text" class="form-control" id="order" placeholder="Jumlah Orderan Mingguan">
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating Outlet Merchant</label>
                        <input name="rating" type="text" class="form-control" id="rating" placeholder="Rating Outlet Merchant">
                    </div>
                    <div class="form-group">
                        <label for="harga_jual">Rata Rata Harga Jual</label>
                        <input name="harga_jual" type="text" class="form-control" id="harga_jual" placeholder="Rata Rata Harga Jual">
                    </div>
                    <div class="form-group date" id="timepicker-example" data-target-input="nearest">
                        <label class="input-group" data-target="#timepicker-example" data-toggle="datetimepicker" for="delivery">Waktu Pengiriman</label>
                        <input name="delivery" type="text" class="form-control datepicker" data-target="#timepicker-example" id="timepicker-example" placeholder="Waktu Pengiriman">
                    </div>
                    <div class="form-group">
                        <label for="weight_order">Bobot Nilai Yang Sudah Di Hitung</label>
                        <input name="weight_order" type="text" class="form-control" id="weight_order" placeholder="Bobot Nilai Yang Sudah diHitung">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Buat Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
